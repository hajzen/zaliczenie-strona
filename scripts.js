const nav = document.getElementById("nav");
const navClose = document.querySelector(".nav-close");

const menuToggle = document.querySelector(".menu-toggle");
menuToggle.addEventListener("click", toggleMenu);

navClose.addEventListener("click", () => {
    nav.querySelector("ul").classList.remove("show");
    navClose.style.display = "none";
});

function toggleMenu() {
    nav.querySelector("ul").classList.add("show");
    navClose.style.display = "block";
}
