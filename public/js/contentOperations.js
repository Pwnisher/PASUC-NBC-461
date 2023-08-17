function toggleCycleDropdown() {
const dropdown = document.getElementById('cycleDropdown');
dropdown.classList.toggle('hidden');
}

function selectCycle(cycle) {
toggleCycleDropdown();
console.log(`Selected ${cycle} cycle`);
// You can perform any other actions here based on the selected cycle
}
