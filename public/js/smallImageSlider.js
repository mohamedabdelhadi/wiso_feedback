const slider = document.getElementById('slider');
const prevSlider = document.getElementById('prev');
const nextSlider = document.getElementById('next');


nextSlider.addEventListener('click', (e) => {
    slider.scrollBy(140, 0);
});

prevSlider.addEventListener('click', (e) => {
    slider.scrollBy(-140, 0);
});


// const slides = document.querySelector(".slides");
// const containerDots = document.querySelector(".container-dots");

// var slideIndex = 1;

// // Images container
// const images = [
//   { src: "https://rb.gy/ohx0bd" },
//   { src: "https://rb.gy/gggxy8" },
//   { src: "https://rb.gy/z2a0fy" },
//   { src: "https://rb.gy/nsefjh" },
//   { src: "https://rb.gy/dssu2a" }
// ];

// // Adding images and dots to the Respective Container
// images.map((img) => {
//   // Creating Image Element and adding src of that image
//   var imgTag = document.createElement("img");
//   imgTag.src = img.src;

//   // Creating Dot (div) Element adding 'dot' class to it
//   var dot = document.createElement("div");
//   dot.classList.add("dot");

//   //  Appending the image and dots to respective container
//   slides.appendChild(imgTag);
//   containerDots.appendChild(dot);
// });

// // Adding EventListener to All dots so that when user click on it trigger move dots;
// const dots = containerDots.querySelectorAll("*").forEach((dot, index) => {
//   dot.addEventListener("click", () => {
//     moveDot(index + 1);
//   });
// });

// // It helps to move the dot, it take "index" as parameter and update the slideIndex
// function moveDot(index) {
//   slideIndex = index;
//   updateImageAndDot();
// }


// function updateImageAndDot() {

//   const activeSlide = slides.querySelector("[data-active]");
//   slides.children[slideIndex - 1].dataset.active = true;
//   activeSlide && delete activeSlide.dataset.active;


//   const activeDot = containerDots.querySelector("[data-active]");
//   containerDots.children[slideIndex - 1].dataset.active = true;
//   activeDot && delete activeDot.dataset.active;
// }


// const nextSlide = () => {
 
//   if (slideIndex !== images.length) {
//     ++slideIndex;
//   } else if (slideIndex === images.length) {
//     slideIndex = 1;
//   }
//   updateImageAndDot();
// };

// const nextBtn = document.querySelector(".next");
// nextBtn.onclick = nextSlide;


// const prevSlide = () => {

//   if (slideIndex !== 1) {
//     --slideIndex;
//   } else if (slideIndex === 1) {
//     slideIndex = images.length;
//   }
//   updateImageAndDot();
// };

// const prevBtn = document.querySelector(".prev");
// prevBtn.onclick = prevSlide;


// updateImageAndDot();

// window.onload = function () {
//   var loadTime =
//     window.performance.timing.domContentLoadedEventEnd -
//     window.performance.timing.navigationStart;
//   console.log("Page load time is " + loadTime);
// };
