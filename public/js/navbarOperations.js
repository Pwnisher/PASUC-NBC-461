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
  
//-----------------------------------------------------

function handleAnchorClick(event) {
  // Get the ID of the clicked anchor
  const clickedId = event.target.id;
  var urlstring = "/application";
  // Perform actions based on the clicked ID
  switch (clickedId) {
    case 'k1A':

      break;
    case 'link2':
      console.log('Link 2 clicked');
      break;
    default:
      // Handle other cases
      break;
  }
  document.getElementById(clickedId).href = urlstring;
}

// Get the hidden div and attach the function to the click event of anchor elements
const accomplishment = submenu.querySelectorAll('a');

accomplishment.forEach(link => {
  link.addEventListener('click', handleAnchorClick);
});
