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

const mobileMenuButton = document.querySelector("button.mobile-menu-button");
const mobileMenuIcon = document.querySelector(".mobile-menu-icon");

let isMenuOpen = false;

mobileMenuButton.addEventListener("click", () => {
  isMenuOpen = !isMenuOpen;
  
  if (isMenuOpen) {
    mobileMenuIcon.classList.add("text-yellow-400");
    mobileMenuOverlay.style.opacity = "1";
  } else {
    mobileMenuIcon.classList.remove("text-yellow-400");
    mobileMenuOverlay.style.opacity = "0";
  }
});
