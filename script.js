//forhamburgermenu

const hamburger = document.querySelector(".hamburger");
const navmenu = document.querySelector(".navmenu");
const searchform = document.querySelector(".searchform");

hamburger.addEventListener("click", () => 
{
    hamburger.classList.toggle("active");
    navmenu.classList.toggle("active");
    searchform.classList.toggle("active");

})

document.querySelectorAll(".navlink").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navmenu.classList.remove("active");
    searchform.classList.remove("active");
}))