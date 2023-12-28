import * as faceapi from './face-api.esm.js';
const modelPath = './static/js/model';
const minScore = 0.4;
const maxResults = 4;
let optionsSSDMobileNet;

var current_age = "";
var current_gender = "";
var current_expression = "";
// var collectdata = [];

function getdata(data) {
  if (data.length == 0) {
    var qrCodeElement = document.getElementById('qrcode');

    qrCodeElement.innerHTML = '';

    finalsentence.innerHTML = "";
    finaltime.innerHTML = "";
    finalimage.src = "../img/black.png";

  }
  else {
    for (const person of data) {
      const expression = Object.entries(person.expressions).sort((a, b) => b[1] - a[1]);

      current_age = `${Math.round(person.age)}`;
      current_gender = `${person.gender}`;
      current_expression = `${expression[0][0]}`;
      console.log(current_age);
      console.log(current_gender);
      console.log(current_expression);
      saveData();
    }
  }
}

function callPHP(data) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", 'php/database.php', true);
  xhr.setRequestHeader("Content-Type", "application/json");

  var json_data = JSON.stringify(data);
  xhr.send(json_data);
}

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}


function saveData() {

  var data = {
    "Age": current_age,
    "Gender": capitalizeFirstLetter(current_gender),
    "Expression": capitalizeFirstLetter(current_expression),
  }
  callPHP(data);

}
async function detectVideo(video) {
  if (!video || video.paused) return false;
  const t0 = performance.now();
  faceapi
    .detectAllFaces(video, optionsSSDMobileNet)
    .withFaceLandmarks()
    .withFaceExpressions()
    .withAgeAndGender()
    .then((result) => {
      getdata(result);

      return true;
    })
    .catch((err) => {
      console.log(`Detect Error: ${(err)}`);
      return false;
    });
  return false;
}

async function setupCamera() {
  const video = document.getElementById('camera-stream');

  if (!video) return null;

  console.log('Setting up camera');
  if (!navigator.mediaDevices) {
    console.log('Camera Error: access not supported');
    return null;
  }
  let eam;
  const conaints = { audio: false, video: { facingMode: 'user', resizeMode: 'crop-and-scale' } };
  if (window.innerWidth > window.innerHeight) conaints.video.width = { ideal: window.innerWidth };
  else conaints.video.height = { ideal: window.innerHeight };
  try {
    eam = await navigator.mediaDevices.getUserMedia(conaints);
  } catch (err) {
    if (err.name === 'PermissionDeniedError' || err.name === 'NotAllowedError') console.log(`Camera Error: camera permission denied: ${err.message || err}`);
    if (err.name === 'SourceUnavailableError') console.log(`Camera Error: camera not available: ${err.message || err}`);
    return null;
  }
  if (eam) video.srcObject = eam;
  else {
    console.log('Camera Error: eam empty');
    return null;
  }
  const track = eam.getVideoTracks()[0];
  const settings = track.getSettings();
  if (settings.deviceId) delete settings.deviceId;
  if (settings.groupId) delete settings.groupId;
  if (settings.aspectRatio) settings.aspectRatio = Math.trunc(100 * settings.aspectRatio) / 100;
  console.log(`Camera active: ${track.label}`);
  console.log(`Camera settings: ${(settings)}`);

  return new Promise((resolve) => {
    video.onloadeddata = async () => {

      video.play();
      resolve(true);
    };
  });
}

function takeSelfie() {
  // console.log("FileName");
  const video = document.getElementById('camera-stream');
  video.pause();
  var selfieFrame = document.getElementById('selfieFrame');

  var canvas = document.createElement('canvas');
  var canvas2 = document.createElement('canvas');
  const context = canvas.getContext('2d');
  const context2 = canvas2.getContext('2d');

  canvas.width = video.videoWidth;
  canvas.height = video.videoHeight;
  canvas2.width = video.videoWidth;
  canvas2.height = video.videoHeight;
  context.drawImage(video, 0, 0, canvas.width, canvas.height);
  context2.drawImage(selfieFrame, 0, 0, canvas.width, canvas.height);

  // canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
  canvas.getContext('2d').drawImage(canvas2, 0, 0, canvas.width, canvas.height);

  const dataURL = canvas.toDataURL('image/jpeg');
  // console.log(dataURL)
  var FileName = new Date().valueOf();
  sendselfie(dataURL, FileName);
}

function generateQR(FileName) {
  var qrCodeElement = document.getElementById('qrcode');
  qrCodeElement.innerHTML = '';
  FileName = "http://192.168.100.20/selfies/" + FileName + ".jpeg";
  // FileName = "https://qltyss.com/matarat/" + FileName + ".png";
  var qr = new QRCode(qrCodeElement, {
    text: FileName,
    width: 228,
    height: 228,
    correctLevel: QRCode.CorrectLevel.H
  });
  var qrtitle = document.createElement('p');
  qrtitle.innerHTML = "! امسح الكود لتحميل صورتك";
  qrtitle.setAttribute('id', 'qrtitle')
  qrtitle.classList.add('fade-in');
  qrCodeElement.appendChild(qrtitle);


}

async function setupFaceAPI() {
  await faceapi.nets.ssdMobilenetv1.load(modelPath);
  await faceapi.nets.ageGenderNet.load(modelPath);
  await faceapi.nets.faceLandmark68Net.load(modelPath);
  await faceapi.nets.faceExpressionNet.load(modelPath);
  optionsSSDMobileNet = new faceapi.SsdMobilenetv1Options({ minConfidence: minScore, maxResults });
  console.log(`Models loaded: ${(faceapi.tf.engine().state.numTensors)} tensors`);
}
function sendselfie(dataURL, fileName) {

  const xhr = new XMLHttpRequest();
  xhr.open('POST', '/upload_to_ftp/', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
  const csrfToken = getCookie('csrftoken');
  if (csrfToken) {
    xhr.setRequestHeader('X-CSRFToken', csrfToken);
  }

  const data = 'image=' + encodeURIComponent(dataURL) + "&" + "fileName=" + fileName;
  // xhr.send('image=' + encodeURIComponent(dataURL) + "&" + "fileName=" + fileName);

  xhr.onreadystatechange = () => {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // consloe.log(xhr.responseText);
      generateQR(fileName);
    }
  }

  xhr.send(data);


}


function getCookie(name) {
  let cookieValue = null;
  if (document.cookie && document.cookie !== '') {
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
      const cookie = cookies[i].trim();
      if (cookie.substring(0, name.length + 1) === (name + '=')) {
        cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
        break;
      }
    }
  }
  return cookieValue;
}

async function main() {
  // generateQR()
  console.log('FaceAPI WebCam Test');
  await faceapi.tf.setBackend('webgl');
  await faceapi.tf.ready();
  console.log(`Version: FaceAPI ${(faceapi?.version || '(not loaded)')} TensorFlow/JS ${(faceapi?.tf?.version_core || '(not loaded)')} Backend: ${(faceapi?.tf?.getBackend() || '(not loaded)')}`);
  await setupFaceAPI();
  // await setupCamera();

  const btn = document.getElementById('capture');

  // btn.addEventListener('click', function (event) {
  //   event.preventDefault();
  // video.pause();
  // detectVideo(video);
  // takeSelfie();
  // });


}
window.onload = main;


window.takeSelfie = takeSelfie;
