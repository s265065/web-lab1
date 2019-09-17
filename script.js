let meows = [new Audio("meows/meow.ogg"),
    new Audio("meows/meow.mp3"),
    new Audio("meows/meow (1).mp3"),
    new Audio("meows/meow (2).mp3"),
    new Audio("meows/meow (3).mp3"),
    new Audio("meows/meow (4).mp3"),
    new Audio("meows/meow (5).mp3"),
    new Audio("meows/meow (6).mp3"),
    new Audio("meows/meow (7).mp3"),
    new Audio("meows/meow (8).mp3"),
    new Audio("meows/meow (9).mp3"),
    new Audio("meows/meow (10).mp3"),
    new Audio("meows/meow (11).mp3"),
    new Audio("meows/meow (12).mp3"),
    new Audio("meows/meow (13).mp3"),
    new Audio("meows/meow (14).mp3"),
    new Audio("meows/meow (15).mp3"),
    new Audio("meows/meow (16).mp3"),
    new Audio("meows/meow (17).mp3"),
    new Audio("meows/meow (18).mp3"),
    new Audio("meows/meow (19).mp3"),
    new Audio("meows/meow (20).mp3"),
    new Audio("meows/meow (21).mp3"),
    new Audio("meows/meow (22).mp3"),
    new Audio("meows/meow (23).mp3"),
    new Audio("meows/meow (24).mp3"),
    new Audio("meows/meow (25).mp3"),
    new Audio("meows/meow (26).mp3"),
    new Audio("meows/meow (27).mp3"),
    new Audio("meows/meow (1).wav"),
    new Audio("meows/meow (2).wav"),
    new Audio("meows/meow (3).wav"),
    new Audio("meows/meow (4).wav"),
    new Audio("meows/meow (5).wav"),
    new Audio("meows/meow (6).wav"),
    new Audio("meows/meow (7).wav")];
// let document="index.html";
function randomPlay() {
    meows[Math.floor(Math.random()*meows.length)].play();
}

const MIN_Y=-3;
const MAX_Y=3;
const  AVALIBALE_X=[-4,-3,-2,-1,0,1,2,3,4];
const AVALIBALE_R=[1,2,3,4,5];

let iframe = document.getElementById('result_frame');
let header = document.getElementById('head-text');
let errorMessage = document.getElementById('errors');
let submitButton = document.getElementById('submit');
let xCheckBoxes = document.querySelectorAll('input[name="x"]');
let rRadioButtons = document.querySelectorAll('input[name="r"]');
let yText = document.getElementById("y");


window.addEventListener('message', handlerMessage);
submitButton.addEventListener("click", onSubmit);

function onSubmit(event) {
    meows[Math.floor(Math.random()*meows.length)].play();
    if (!(checkX() && checkY() && checkR())) {
        event.preventDefault();}
    else {
        setMessage(" ");
        header.style.backgroundImage = "url('img/not-fallen.jpg')";

    }
}

function setMessage(text) {
    if (!(text===' ')){
    header.style.backgroundImage = "url('img/cat.jpg')";}
    errorMessage.innerText = text;
    if (text != null)
        errorMessage.classList.remove("hidden");
    else
        errorMessage.classList.add("hidden");

}

function checkR() {
    for (let i = 0; i < rRadioButtons.length; i++) {
        if (rRadioButtons[i].checked) {
            if (AVALIBALE_R.indexOf(+rRadioButtons[i].value) === -1)   {
                setMessage("потому что ты изменил то, что не стоило");
                return false;

            }
            return true;
        }
    }
    setMessage("из-за того что ты не выбрал R");
    return false;
}

function checkY() {
    yText.value = yText.value.trim();

    if (yText.value.length === 0) {
        setMessage("из-за того что ты не выбрал Y");
        return false;
    }

    if (isNaN(yText.value.replace(',', '.'))) {
        setMessage("потому Y должен быть числом");
        return false;
    }
    let val = +yText.value;
    if (val <= MIN_Y || val >= MAX_Y) {
        setMessage(`потому что Y только из этого отрезка (${MIN_Y} ; ${MAX_Y})`);
        return false;
    }
    return true;
}

function checkX() {
    let selected = null;
    for (let i = 0; i < xCheckBoxes.length; i++) {
        if (xCheckBoxes[i].checked) {
            if (selected) {
                setMessage("потому что ты можешь выбрать только один X");
                return false;
            }

            if (AVALIBALE_X.indexOf(+xCheckBoxes[i].value) === -1)   {
                setMessage("из-за того что некотрые лезут туда, куда не стоит");
                return false;
            }

            selected = xCheckBoxes[i].value;
        }
    }
    if (!selected) {
        setMessage("потому что ты забыл выбрать X");
        return false;
    }
    return true;
}

function handlerMessage(e){
    if (e.data === '1') {
        header.style.backgroundImage = "url('img/not-fallen.jpg')";
    return true;
    }
    else if (e.data === '0'){    header.style.backgroundImage = "url('img/cat.jpg')";
    return false;}
}



