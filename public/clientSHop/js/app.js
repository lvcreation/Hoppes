

let cardOne = document.getElementById("card-one");
const header = document.querySelector('.header');
const nav = document.querySelector('.nav');
const navLinks = document.querySelectorAll('.nav_link');
const navContentLinks = document.querySelector('.nav_links');

console.log(navLinks);
// cardOne.style.opacity = 0;
// cardOne.style.transform = 'translateX(15em) scale(0)';


// window.addEventListener('scroll', () => {
//     let value = window.scrollY - 400;
 
//     if (window.scrollY <= 5000) {
//             cardOne.style.transform = `scale(${value / 200}) translateX(${(-value/2)+"px"})`;
//             cardOne.style.opacity = value;
//     } 
// });


const heightNav = nav.getBoundingClientRect().height;

const stickyNav = function (entries) {
  const [entry] = entries;
  // console.log(entry);
  if (!entry.isIntersecting) {
    nav.classList.add('sticky');
    navLinks.forEach(link => link.style.color = 'white');
  } 
  else {
    nav.classList.remove('sticky');
    navLinks.forEach(link => link.style.color = '');
  } 
};
const headerObserver = new IntersectionObserver(stickyNav, {
  root: null,
  threshold: 0,
  // rootMargin: `-${heightNav}px`,
});

headerObserver.observe(header);

// CARD TWO
// const cardTwo = document.getElementById('card-two');
// cardTwo.style.background = 'red';

// cardTwo.style.opacity = 0;
// cardTwo.style.transform = 'translateX(15em) scale(0)';

// const revealScrollCardTwo = (entries) => {
//   const [ entry ] = entries;

//   const cardrev = entry.target;
//   console.log(cardrev);

//   if (entry.isIntersecting) {
//     cardTwo.addEventListener('scroll', () => {
//       let value = window.scrollY - 400;
  
//           if (window.scrollY <= 9000) {
//               cardrev.style.transform = `scale(${value / 200}) translateX(${(value/2)+"px"})`;
//               cardrev.style.opacity = value;
//           }
//       });
//   }
// }

// const extraitObserver = new IntersectionObserver(revealScrollCardTwo, {
//   root: null,
//   threshold: 0,
// });


// extraitObserver.observe(cardTwo);


const lines = document.querySelectorAll('.show_line');
const btnConexion = document.querySelector('.nav_log-conex');
const show = document.querySelector('.show');
const conexion = document.querySelector('.conexion');
const inscription = document.querySelector('.inscription');
const btn_close = document.querySelector('.conexion_close');
const link_inscript = document.querySelector('.link_inscript');
const btn_inscription = document.querySelector('.nav_log-inscript');
const animMenu = document.querySelector('.anim-menu');
const navLog = document.querySelector('.nav_log');
const closeburger = document.querySelector('.close');
const conexionContent = document.querySelector('.conexion_content');
const navContent = document.querySelector('.nav_content');


show.classList.add('show_disable');
lines.forEach(line => line.classList.add('disableLine'));
conexion.classList.add('disable_conexion');
inscription.classList.add('disable_iscription');

const showAnimConexion = () => {
  lines.forEach(line => line.classList.add('show_anim'));
  lines.forEach(line => line.classList.remove('disableLine'));
  show.classList.remove('show_disable');
  conexion.classList.remove('disable_conexion');
}

const showAnimInscription = () => {
  lines.forEach(line => line.classList.add('show_anim'));
  lines.forEach(line => line.classList.remove('disableLine'));
  show.classList.remove('show_disable');
  conexion.classList.remove('disable_conexion');
  showInscription();
}


const closeConexion = () => {
  lines.forEach(line => line.classList.remove('show_anim'));
  lines.forEach(line => line.classList.add('disableLine'));
  show.classList.add('show_disable');
  conexion.classList.add('disable_conexion');
  inscription.classList.add('disable_iscription');

}

const showInscription = () => {
  inscription.classList.remove('disable_iscription');
}

btnConexion.addEventListener('click', showAnimConexion);
btn_close.addEventListener('click', closeConexion);
link_inscript.addEventListener('click', showInscription);
btn_inscription.addEventListener('click', showAnimInscription);


// const step1 = document.querySelector('.steps_first');
// const step2 = document.querySelector('.steps_second');
// const step3 = document.querySelector('.steps_third');

// const next2 = document.getElementById('next2');
// const next3 = document.getElementById('next3');

// const prev2 = document.getElementById('prev2');
// const prev1 = document.getElementById('prev1');

// step2.style.left = "70rem";
// step3.style.left = "70rem";

// next2.addEventListener('click', function () {

//   step1.style.left = "-70rem";
//   step2.style.left = "4rem";
// })

// next3.addEventListener('click', function () {

//   step1.style.left = "-70rem";
//   step2.style.left = "-70rem";
//   step3.style.left = "4rem";
// });

// prev2.addEventListener('click', function () {

//   step2.style.left = "4rem";
//   step3.style.left = "70rem";
// });

// prev1.addEventListener('click', function () {

//   step1.style.left = "4rem";
//   step2.style.left = "70rem";
// });


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