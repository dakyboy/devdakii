const menu = document.getElementById('nav-links');
const openMenuButton = document.getElementById('open-menu-button');
const closeMenuButton = document.getElementById('close-menu-button');

function openMenu() {
    menu.style.display = "flex";
    closeMenuButton.style.zIndex = "4";
    closeMenuButton.style.display = "flex";
    openMenuButton.style.zIndex = "-4";
    openMenuButton.style.display = "none";
}

function closeMenu() {
    menu.style.display = "none";
    openMenuButton.style.zIndex = "4";
    openMenuButton.style.display = "flex";
    closeMenuButton.style.zIndex = "-4";
    closeMenuButton.style.display = "none";
}