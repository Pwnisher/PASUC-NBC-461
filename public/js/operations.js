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
<<<<<<< HEAD
const mobileMenuIcon = document.querySelector(".mobile-menu-icon");
=======
const mobileMenuOverlay = mobileMenuButton.querySelector(".mobile-menu-overlay");
>>>>>>> jelo-test-branch

let isMenuOpen = false;

mobileMenuButton.addEventListener("click", () => {
  isMenuOpen = !isMenuOpen;
<<<<<<< HEAD
  
  if (isMenuOpen) {
    mobileMenuIcon.classList.add("text-yellow-400");
    mobileMenuOverlay.style.opacity = "1";
  } else {
    mobileMenuIcon.classList.remove("text-yellow-400");
    mobileMenuOverlay.style.opacity = "0";
  }
});
=======

  if (isMenuOpen) {
    mobileMenuOverlay.style.opacity = "1";
  } else {
    mobileMenuOverlay.style.opacity = "0";
  }
});

const submenuBtn = document.getElementById("accomplishmentBtn");
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
  
>>>>>>> jelo-test-branch
