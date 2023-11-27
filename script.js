// const carousel = document.querySelector('.carousel');
// const carouselItems = document.querySelector('.carousel-items');

// let isDragging = false;
// let startPosition = 0;
// let currentTranslate = 0;
// let prevTranslate = 0;
// let minTranslate = 0;
// let maxTranslate = 0;

// carousel.addEventListener('mousedown', handleMouseDown);
// carousel.addEventListener('mousemove', handleMouseMove);
// carousel.addEventListener('mouseup', handleMouseUp);
// carousel.addEventListener('mouseleave', handleMouseLeave);
// carousel.addEventListener('wheel', handleWheel);

// function handleMouseDown(e) {
//   isDragging = true;
//   startPosition = e.clientX;
//   carousel.classList.add('grabbing');
//   minTranslate = -carouselItems.offsetWidth + carousel.offsetWidth;
//   maxTranslate = 0;
// }

// function handleMouseMove(e) {
//   if (!isDragging) return;
//   const currentPosition = e.clientX;
//   const translate = currentPosition - startPosition;
//   currentTranslate = prevTranslate + translate;

//   if (currentTranslate < minTranslate) {
//     currentTranslate = minTranslate;
//   } else if (currentTranslate > maxTranslate) {
//     currentTranslate = maxTranslate;
//   }

//   carousel.style.transform = `translateX(${currentTranslate}px)`;
// }

// function handleMouseUp() {
//   isDragging = false;
//   prevTranslate = currentTranslate;
//   carousel.classList.remove('grabbing');
// }

// function handleMouseLeave() {
//   isDragging = false;
//   carousel.classList.remove('grabbing');
// }

// function handleWheel(e) {
//   e.preventDefault();
//   const scrollAmount = e.deltaY;
//   carousel.scrollLeft += scrollAmount;
// }

// const menuItems = document.querySelectorAll('.menu-item');

// menuItems.forEach((item) => {
//   item.addEventListener('click', (event) => {
    
//     menuItems.forEach((item) => {
//       item.classList.remove('active');
//     });

//     event.target.classList.add('active');
//   });
// });







