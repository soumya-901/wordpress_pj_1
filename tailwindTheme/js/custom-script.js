const menu = document.getElementById("menu");
const crus = document.getElementById("crus");
const nav = document.getElementById("nav");
const toggle_menu = (e) => {
  nav.classList.toggle("hidden");
  menu.classList.toggle("hidden");
  crus.classList.toggle("hidden");
  console.log("program", menu, crus);
};
