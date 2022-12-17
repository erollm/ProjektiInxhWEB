const slideshow = document.getElementById("slideshow");
const select1 = document.getElementById("select1");
const select2 = document.getElementById("select2");
const select3 = document.getElementById("select3");
var slideSelected = 1;

var myInterval = setInterval(function () { slideSelect(++slideSelected) }, 5000);

function slideRight() {
    slideSelect(++slideSelected)
    resetInt()
}
function slideLeft() {
    slideSelect(--slideSelected)
    resetInt()
    console.log(slideSelected)
}

function resetInt() {
    clearInterval(myInterval)
    myInterval = setInterval(function () { slideSelect(++slideSelected) }, 5000);
}

select1.addEventListener("click", function () {
    slideSelect(1);
    resetInt()
});
select2.addEventListener("click", function () {
    slideSelect(2);
    resetInt()
});
select3.addEventListener("click", function () {
    slideSelect(3);
    resetInt()
});

function slideSelect(sel) {
    switch (sel) {
        case 1:
            slideshow.style.backgroundImage = ("url('images/pizza0.jpg')")
            select1.classList.replace("fa-regular", "fa-solid");
            select2.classList.replace("fa-solid", "fa-regular");
            select3.classList.replace("fa-solid", "fa-regular");
            slideSelected = 1;
            break;
        case 2:
            slideshow.style.backgroundImage = ("url('images/pizza1.jpg')")
            select1.classList.replace("fa-solid", "fa-regular");
            select2.classList.replace("fa-regular", "fa-solid");
            select3.classList.replace("fa-solid", "fa-regular");
            slideSelected = 2;
            break;
        case 3:
            slideshow.style.backgroundImage = ("url('images/pizza2.jpg')")
            select1.classList.replace("fa-solid", "fa-regular");
            select2.classList.replace("fa-solid", "fa-regular");
            select3.classList.replace("fa-regular", "fa-solid");
            slideSelected = 3;
            break;
        case 4:
            slideshow.style.backgroundImage = ("url('images/pizza0.jpg')")
            select1.classList.replace("fa-regular", "fa-solid");
            select2.classList.replace("fa-solid", "fa-regular");
            select3.classList.replace("fa-solid", "fa-regular");
            slideSelected = 1;
            break;
        case 0:
            slideshow.style.backgroundImage = ("url('images/pizza2.jpg')")
            select1.classList.replace("fa-solid", "fa-regular");
            select2.classList.replace("fa-solid", "fa-regular");
            select3.classList.replace("fa-regular", "fa-solid");
            slideSelected = 3;
    }

}