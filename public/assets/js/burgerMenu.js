let burgerMenu = document.getElementById("burgerMenu");
let menu = document.getElementById("menu");
let burgerMenuClose = document.getElementById("burgerMenuClose");

burgerMenu.addEventListener("click", () => {
    menu.classList.toggle("active");
    burgerMenuClose.classList.toggle("active");
});
