var clientID, host, port, client, topic;

startConnect();

function startConnect() {
  clientID = 'mqttx_b1c2fc78';
  host = '192.168.100.29'; // Replace with the IP address of your Raspberry Pi
  port = 1883;
  console.log('Connecting to ' + host + ' on port ' + port);
  client = new Paho.MQTT.Client(host, port, clientID);
  client.onConnectionLost = onConnectionLost;
  client.onMessageArrived = onMessageArrived;
  client.connect({
    onSuccess: onConnect,
    onFailure: onFailure, // Add onFailure callback
    useSSL: false // Set to true if you're using SSL/TLS
  });
}

function onConnect() {
  topic = 'Car1';
  console.log('Connected to ' + host + ' on port ' + port);
  console.log('Subscribing to topic ' + topic);
  client.subscribe(topic);
}

function onConnectionLost(responseObject) {
  console.log('ERROR: Connection is lost.');
  if (responseObject.errorCode !== 0) {
    console.log('ERROR: ' + responseObject.errorMessage);
  }
  // Handle reconnection here if desired
}

function onMessageArrived(message) {
  var obj = JSON.parse(message.payloadString);
  if (obj.title === 'start') {
    console.log('Received "start" message.');
    var vich = document.getElementById('vichlesPage');
    vich.click();
  }
}

function onFailure(message) {
  console.log('ERROR: Connection failed: ' + message.errorMessage);
  // Handle the failure here
}

function startDisconnect() {
  client.disconnect();
  console.log('Disconnected');
}
