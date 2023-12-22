// getting HTML elements
const plus = document.querySelector(".content_social"),
      toggleBtn = plus.querySelector(".toggle-btn");

  toggleBtn.addEventListener("click" , () =>{
    plus.classList.toggle("open");
  });

// js code to make draggable nav
function onDrag({movementY}) { //movementY gets mouse vertical value
  const navStyle = window.getComputedStyle(plus), //getting all css style of nav
        navTop = parseInt(navStyle.top), // getting nav top value & convert it into string
        navHeight = parseInt(navStyle.height), // getting nav height value & convert it into string
        windHeight = window.innerHeight; // getting window height

  plus.style.top = navTop > 0 ? `${navTop + movementY}px` : "1px";
  if(navTop > windHeight - navHeight){
    plus.style.top = `${windHeight - navHeight}px`;
  }
}

//this function will call when user click mouse's button and  move mouse on nav
plus.addEventListener("mousedown", () =>{
  plus.addEventListener("mousemove", onDrag);
});

//these function will call when user relase mouse button and leave mouse from nav
plus.addEventListener("mouseup", () =>{
  plus.removeEventListener("mousemove", onDrag);
});
plus.addEventListener("mouseleave", () =>{
  plus.removeEventListener("mousemove", onDrag);
});
