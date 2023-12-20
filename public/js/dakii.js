const menu = document.getElementById('nav-links');
const openMenuButton = document.getElementById('open-menu-button');
const closeMenuButton = document.getElementById('close-menu-button');

function openMenu() {
    menu.style.display = "flex";
    openMenuButton.style.zIndex = "-4";
    openMenuButton.style.height = "0";
    openMenuButton.style.width = "0";
    closeMenuButton.style.zIndex = "4";
    closeMenuButton.style.width = "32px";
    closeMenuButton.style.height = "32px";

}

function closeMenu() {
    if (getComputedStyle(menu).position == "fixed") {
        menu.style.display = "none";
        openMenuButton.style.zIndex = "4";
        closeMenuButton.style.zIndex = "-4";
        openMenuButton.style.height = "32px";
        openMenuButton.style.width = "32px";
        closeMenuButton.style.height = "0";
        closeMenuButton.style.width = "0";
    }

}