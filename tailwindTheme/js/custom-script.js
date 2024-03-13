const menu = document.getElementById("menu");
const crus = document.getElementById("crus");
const nav = document.getElementById("nav");
const toggle_menu = (e) => {
  nav.classList.toggle("hidden");
  menu.classList.toggle("hidden");
  crus.classList.toggle("hidden");
  console.log("program", menu, crus);
};

// let prevScrollpos = window.scrollY;
// window.onscroll = function() {
//     let currentScrollPos = window.scrollY;
//     // console.log("prevScrollpos",prevScrollpos,"currentScrollPos",currentScrollPos)
//     if (prevScrollpos < currentScrollPos && currentScrollPos>50) {
//       // console.log("the document ",document.getElementById("customnavbar").style.display)
//       // document.getElementById("customnavbar").classList.add('translate-y-full');
//         document.getElementById("customnavbar").style.display = "none";
//       } else {
//         document.getElementById("customnavbar").style.display = ""; 
//         // document.getElementById("customnavbar").classList.remove('translate-y-full');
//         // Change this value to adjust how much the navbar hides
//         // console.log("the document ",document.getElementById("customnavbar"))
//     }
//     prevScrollpos = currentScrollPos;
// }

// -------------------------------- nav bar dropdown ----------------------------------

// const Dropdown = document.querySelectorAll(".dropdown");
// const fropFunction = (e) => {
//   Dropdown.classList.toggle("hidden");
//   console.log("hellow");
// }