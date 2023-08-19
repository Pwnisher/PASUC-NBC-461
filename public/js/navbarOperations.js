//Login/Logout Operations
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

//Mobile navbar operations
const mobileMenuButton = document.querySelector("button.mobile-menu-button");
const mobileMenuIcon = document.querySelector(".mobile-menu-icon");
const mobileMenuOverlay = mobileMenuButton.querySelector(".mobile-menu-overlay");

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

//Submenu operations
const submenuBtn = document.getElementById("application_btn");
const submenu = document.getElementById("accomplishment-container");

submenuBtn.addEventListener("click", (event) => {
  event.stopPropagation();
  submenu.classList.toggle("hidden");
});

document.addEventListener("click", () => {
  if (!submenu.classList.contains("hidden")) {
    submenu.classList.add("hidden");
  }
});

// Get the hidden div and attach the function to the click event of anchor elements
const accomplishment = submenu.querySelectorAll('a');

accomplishment.forEach(link => {
  link.addEventListener('click', handleAnchorClick);
});

// Cycle Dropdown

function toggleCycleDropdown() {
  const dropdown = document.getElementById('cycleDropdown');
  dropdown.classList.toggle('hidden');
}
