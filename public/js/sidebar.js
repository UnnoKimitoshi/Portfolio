const body = document.querySelector("body");
const sidebar = document.querySelector(".sidebar");
const toggle = document.querySelector(".toggle");
const mode = document.querySelector(".mode");

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

mode.addEventListener("click", () => {
    body.classList.toggle("dark");
});
