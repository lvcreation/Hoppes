import { catShowFormation,catHideFormation } from './formations.js';

// const btnShowFormation = document.querySelector('#formations');
const btnShowFormation = document.querySelectorAll('.displayed');
const closeCatForm = document.querySelector('#closeCatForm');
const formationsLink = document.querySelector('#formations--link');
const formationsBox = document.querySelector('#formations-box');
const testimonialsLink = document.querySelector('#testimonials--link');
const testimonialBox = document.querySelector('#testimonials-box');
const testimonialsFigure = document.querySelectorAll('.testimonials-content>figure');
// const programmeFormations =document.querySelector('#programme-formations');
// const displayedFormation = document.querySelector('.displayed');



btnShowFormation.forEach(btn => {
  btn.addEventListener('click', catShowFormation)
})
closeCatForm.addEventListener('click', catHideFormation)

testimonialBox.addEventListener('click', () =>{
  const randomPic =Math.floor(Math.random() * 1.5 - 0.5) + 0.5;
  testimonialsFigure.forEach(item => {
    // item.style.transform= `scale(${randomPic})`
    console.log(item)
  })
})

const handleFormationLink = (entries,observer) =>{
    const [entry] = entries;
    
     if(entry.isIntersecting) {
      formationsBox.classList.add('showBoxPers')

    }else{
      formationsBox.classList.remove('showBoxPers')
    }
}

const handleTestimonialsLink = (entries,observer) => {
  const [entry] = entries;

     if(entry.isIntersecting) {
      testimonialBox.classList.add('showBoxTest')
      }else{
        testimonialBox.classList.remove('showBoxTest')
    }
}

const observeFormationsLink = new IntersectionObserver(handleFormationLink,{
    root:null,
    threshold:1
})


const observeTestimonialsLink = new IntersectionObserver(handleTestimonialsLink,{
    root:null,
    threshold:1
})


observeFormationsLink.observe(formationsLink);
observeTestimonialsLink.observe(testimonialsLink);


//carousel event
new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });



//formateur
var mySwiper = new Swiper('.swiper-container', {
  speed: 400,
  spaceBetween: 100,
  initialSlide: 0,
  //truewrapper adoptsheight of active slide
  autoHeight: false,
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  // delay between transitions in ms
  autoplay: true,
  autoplayStopOnLast: true, // loop false also
  // If we need pagination
  pagination: '.swiper-pagination',
  paginationType: "bullets",

  // Navigation arrows
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',

  // And if we need scrollbar
  // scrollbar: '.swiper-scrollbar',
  // "slide", "fade", "cube", "coverflow" or "flip"
  effect: 'coverflow',
  // Distance between slides in px.
  spaceBetween: 5,
  //
  slidesPerView: 1,
  //
  centeredSlides: true,
  //
  slidesOffsetBefore: 0,
  //
  grabCursor: true,
}) 


 //testimonials
 var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type:"bullets"
  },
   navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
   effect: 'coverflow',
  autoplay:true,
 
  breakpoints :{
    320:{
       slidesPerView: 1,
      spaceBetween: 10,
    },
    576: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    // lorsque la largeur de la fenêtre est >= 480 pixels
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    // lorsque la largeur de la fenêtre est >= 640 pixels
    992: {
      slidesPerView: 3,
      spaceBetween: 30
    }
  }, 
});


// MENU ACTIVE  
const btnMenu = document.querySelector('.menu_icon');
const menuLines = document.querySelectorAll('.menu_icon-line');

console.log(nav);

nav.classList.add('disableMenu');
navContent.classList.add('active-navContent');

const activeMenu = () => {
  nav.classList.toggle('disableMenu');
  animMenu.classList.toggle('active-anim--menu');
  navContentLinks.classList.toggle('anim-links');
  navLog.classList.toggle('nav_log--active');
  closeburger.classList.toggle('close-active');
  menuLines.forEach(line => line.classList.toggle('close-burger'));  
 navContent.classList.toggle('active-navContent');
}

btnMenu.addEventListener('click',activeMenu);