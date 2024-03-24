// nav bar ==============
const Top = document.getElementById("top");
const Ber = document.querySelector(".ber");
const Cont = document.querySelector(".cont");
const Nav = document.querySelector("nav");
const Drop = document.querySelector("nav ul");
const SDrop = document.querySelector("nav ul li ul");
const Search = document.querySelector(".search");

function dropdow() {
  Top.classList.toggle("rot");

  // ==========single drop  =============
  if (isShow) {
    SDrop.style.display = "block";
    isShow = false;
  } else {
    SDrop.style.display = "none";
    isShow = true;
  }
}

let isShow = true;
function resNav() {
  // ========= btn cros ============

  Ber.classList.toggle("bnone");

  // ==========up down =============
  // if (isShow) {
  //     Nav.style.height = "100vh";
  //     isShow = false;
  // } else {
  //     Nav.style.height = "3rem";
  //     isShow = true;
  // }

  // ===============drop down ================

  if (isShow) {
    Nav.style.height = "100vh";
    Drop.style.display = "block";
    isShow = false;
  } else {
    Nav.style.height = "3rem";
    Drop.style.display = "none";
    isShow = true;
  }
}

// ============scroll================

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

// =================================

function searchDown() {
  if (isShow) {
    Search.style.top = "100px";
    isShow = false;
  } else {
    Search.style.top = "0";
    isShow = true;
  }
}
