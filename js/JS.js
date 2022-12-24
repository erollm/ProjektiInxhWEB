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