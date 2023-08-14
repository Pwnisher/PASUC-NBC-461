const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

const dropdownToggle = document.getElementById("dropdown-toggle");
const dropdownMenu = document.getElementById("dropdown-menu");

dropdownToggle.addEventListener("click", (event) => {
    event.stopPropagation();
    dropdownMenu.classList.toggle("hidden");
});

document.addEventListener("click", () => {
    dropdownMenu.classList.add("hidden");
});

const submenuToggle = document.getElementById("accomplishmentBtn");
const submenu = document.getElementById("accomplishment-container");

submenuToggle.addEventListener("click", (event) => {
    event.stopPropagation();
    submenu.classList.toggle("hidden");
});

document.addEventListener("click", () => {
    submenu.classList.add("hidden");
});