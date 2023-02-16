const pizzaMenu = document.getElementById("pizzaMenu");
const pastaMenu = document.getElementById("pastaMenu");
const drinksMenu = document.getElementById("drinksMenu");
const pizzabutt = document.getElementById("pizzaButt");
const pastabutt = document.getElementById("pastaButt");
const drinksbutt = document.getElementById("drinksButt");
var selectedButton = pizzabutt;
var selectedDisplay = pizzaMenu;

function selectDisplay(SelectedDisplay) {
    selectedDisplay.style.display = "none";
    selectedDisplay = SelectedDisplay;
    selectedDisplay.style.display = "flex"
}

function selectButton(SelectedButton) {
    selectedButton.classList.replace("selectedMenu", "deliveryButtons");
    selectedButton = SelectedButton;
    selectedButton.classList.replace("deliveryButtons", "selectedMenu");
}

function showPizzaMenu() {
    selectDisplay(pizzaMenu);
    selectButton(pizzabutt);
}

function showPastaMenu() {
    selectDisplay(pastaMenu);
    selectButton(pastabutt);
}

function showDrinksMenu() {
    selectDisplay(drinksMenu);
    selectButton(drinksbutt)
}

const mobileIcon = document.getElementById("mobileicon");
const mobileMenu = document.getElementById("mobilenavbar");
function showMenu() {
    if (mobileMenu.style.display == "none") {
        mobileMenu.style.display = "block";
        mobileIcon.classList.replace("fa-bars", "fa-xmark");
    }
    else {
        mobileMenu.style.display = "none";
        mobileIcon.classList.replace("fa-xmark", "fa-bars");
    }
}

function redirect(url) {
    window.location.href = url;
}