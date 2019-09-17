<!DOCTYPE html>
<?php
session_start();
//global vars
$_SESSION['arr'] = array();
?>
<html>
<head>
    <title>лапка</title>
    <meta charset="UTF-8">
    <link rel='shortcut icon' href='img/paw.png'>
<!--    <script>-->
<!--        let meows = [new Audio("meows/meow.ogg"),-->
<!--            new Audio("meows/meow.mp3"),-->
<!--            new Audio("meows/meow (1).mp3"),-->
<!--            new Audio("meows/meow (2).mp3"),-->
<!--            new Audio("meows/meow (3).mp3"),-->
<!--            new Audio("meows/meow (4).mp3"),-->
<!--            new Audio("meows/meow (5).mp3"),-->
<!--            new Audio("meows/meow (6).mp3"),-->
<!--            new Audio("meows/meow (7).mp3"),-->
<!--            new Audio("meows/meow (8).mp3"),-->
<!--            new Audio("meows/meow (9).mp3"),-->
<!--            new Audio("meows/meow (10).mp3"),-->
<!--            new Audio("meows/meow (11).mp3"),-->
<!--            new Audio("meows/meow (12).mp3"),-->
<!--            new Audio("meows/meow (13).mp3"),-->
<!--            new Audio("meows/meow (14).mp3"),-->
<!--            new Audio("meows/meow (15).mp3"),-->
<!--            new Audio("meows/meow (16).mp3"),-->
<!--            new Audio("meows/meow (17).mp3"),-->
<!--            new Audio("meows/meow (18).mp3"),-->
<!--            new Audio("meows/meow (19).mp3"),-->
<!--            new Audio("meows/meow (20).mp3"),-->
<!--            new Audio("meows/meow (21).mp3"),-->
<!--            new Audio("meows/meow (22).mp3"),-->
<!--            new Audio("meows/meow (23).mp3"),-->
<!--            new Audio("meows/meow (24).mp3"),-->
<!--            new Audio("meows/meow (25).mp3"),-->
<!--            new Audio("meows/meow (26).mp3"),-->
<!--            new Audio("meows/meow (27).mp3"),-->
<!--            new Audio("meows/meow (1).wav"),-->
<!--            new Audio("meows/meow (2).wav"),-->
<!--            new Audio("meows/meow (3).wav"),-->
<!--            new Audio("meows/meow (4).wav"),-->
<!--            new Audio("meows/meow (5).wav"),-->
<!--            new Audio("meows/meow (6).wav"),-->
<!--            new Audio("meows/meow (7).wav")];-->
<!--        // let document="index.html";-->
<!--        function randomPlay() {-->
<!--            meows[Math.floor(Math.random()*meows.length)].play();-->
<!--        }-->
<!---->
<!--        const MIN_Y=-3;-->
<!--        const MAX_Y=3;-->
<!--        const  AVALIBALE_X=[-4,-3,-2,-1,0,1,2,3,4];-->
<!--        const AVALIBALE_R=[1,2,3,4,5];-->
<!---->
<!--        let iframe = document.getElementById('result_frame');-->
<!--        let header = document.getElementById('head-text');-->
<!--        let errorMessage = document.getElementById('errors');-->
<!--        let submitButton = document.getElementById('submit');-->
<!--        let xCheckBoxes = document.querySelectorAll('input[name="x"]');-->
<!--        let rRadioButtons = document.querySelectorAll('input[name="r"]');-->
<!--        let yText = document.getElementById("y");-->
<!---->
<!---->
<!--        window.addEventListener('message', handlerMessage);-->
<!--        submitButton.addEventListener("click", onSubmit);-->
<!---->
<!--        function onSubmit(event) {-->
<!--            meows[Math.floor(Math.random()*meows.length)].play();-->
<!--            if (!(checkX() && checkY() && checkR())) {-->
<!--                event.preventDefault();}-->
<!--            else {-->
<!--                setMessage(" ");-->
<!--                header.style.backgroundImage = "url('img/not-fallen.jpg')";-->
<!---->
<!--            }-->
<!--        }-->
<!---->
<!--        function setMessage(text) {-->
<!--            if (!(text===' ')){-->
<!--                header.style.backgroundImage = "url('img/cat.jpg')";}-->
<!--            errorMessage.innerText = text;-->
<!--            if (text != null)-->
<!--                errorMessage.classList.remove("hidden");-->
<!--            else-->
<!--                errorMessage.classList.add("hidden");-->
<!---->
<!--        }-->
<!---->
<!--        function checkR() {-->
<!--            for (let i = 0; i < rRadioButtons.length; i++) {-->
<!--                if (rRadioButtons[i].checked) {-->
<!--                    if (AVALIBALE_R.indexOf(+rRadioButtons[i].value) === -1)   {-->
<!--                        setMessage("потому что ты изменил то, что не стоило");-->
<!--                        return false;-->
<!---->
<!--                    }-->
<!--                    return true;-->
<!--                }-->
<!--            }-->
<!--            setMessage("из-за того что ты не выбрал R");-->
<!--            return false;-->
<!--        }-->
<!---->
<!--        function checkY() {-->
<!--            yText.value = yText.value.trim();-->
<!---->
<!--            if (yText.value.length === 0) {-->
<!--                setMessage("из-за того что ты не выбрал Y");-->
<!--                return false;-->
<!--            }-->
<!---->
<!--            if (isNaN(yText.value.replace(',', '.'))) {-->
<!--                setMessage("потому Y должен быть числом");-->
<!--                return false;-->
<!--            }-->
<!--            let val = +yText.value;-->
<!--            if (val <= MIN_Y || val >= MAX_Y) {-->
<!--                setMessage(`потому что Y только из этого отрезка (${MIN_Y} ; ${MAX_Y})`);-->
<!--                return false;-->
<!--            }-->
<!--            return true;-->
<!--        }-->
<!---->
<!--        function checkX() {-->
<!--            let selected = null;-->
<!--            for (let i = 0; i < xCheckBoxes.length; i++) {-->
<!--                if (xCheckBoxes[i].checked) {-->
<!--                    if (selected) {-->
<!--                        setMessage("потому что ты можешь выбрать только один X");-->
<!--                        return false;-->
<!--                    }-->
<!---->
<!--                    if (AVALIBALE_X.indexOf(+xCheckBoxes[i].value) === -1)   {-->
<!--                        setMessage("из-за того что некотрые лезут туда, куда не стоит");-->
<!--                        return false;-->
<!--                    }-->
<!---->
<!--                    selected = xCheckBoxes[i].value;-->
<!--                }-->
<!--            }-->
<!--            if (!selected) {-->
<!--                setMessage("потому что ты забыл выбрать X");-->
<!--                return false;-->
<!--            }-->
<!--            return true;-->
<!--        }-->
<!---->
<!--        function handlerMessage(e){-->
<!--            if (e.data === '1') {-->
<!--                header.style.backgroundImage = "url('img/not-fallen.jpg')";-->
<!--                return true;-->
<!--            }-->
<!--            else if (e.data === '0'){    header.style.backgroundImage = "url('img/cat.jpg')";-->
<!--                return false;}-->
<!--        }-->
<!--        -->
<!---->
<!--    </script>-->
</head>
<body>
<table>
    <th>Введи координаты точки и параметр R, чтобы узнать принадлежит ли она области графика. Но будь осторожен! Если точка окажется вне графика этот милый котик упадёт.</th>
    <tr>
        <td class="header" id="head-text">
            <table>
                <tr >
                    <td height="50px" width="270px">
                        <br>
                        <label>Бострикова Дарья P3201 Вариант 201002</label>
                    </td>
                </tr>
                <tr><td height=70px"></td></tr>
                <tr>
                    <td></td>
                    <td width=150px> <div><span id="errors"></span></div></td>
                    <td width="10px"></td>
                </tr></table>
        </td>
        <td width="40%" >
            <form id="my_form" method="GET" action="check.php" target="result_frame" >
                <p class="panel__title">Координата X</p>
                <table>
                    <tr><td><div class="amazing-checkbox">
                                <label>
                                    <input type="checkbox" name="x" value="-4" onchange="randomPlay()">
                                    <span>-4</span>
                                </label>
                            </div>

                            <div class="amazing-checkbox">
                                <label>
                                    <input type="checkbox" name="x" value="-3" onchange="randomPlay()">
                                    <span>-3</span>
                                </label>
                            </div>

                            <div class="amazing-checkbox">
                                <label>
                                    <input type="checkbox" name="x" value="-2" onchange="randomPlay()">
                                    <span>-2</span>
                                </label>
                            </div>

                        </td>
                        <td>
                            <div class="amazing-checkbox">
                                <label>
                                    <input type="checkbox" name="x" value="-1" onchange="randomPlay()">
                                    <span>-1</span>
                                </label>
                            </div>
                            <div class="amazing-checkbox">
                                <label>
                                    <input type="checkbox" name="x" value="0" onchange="randomPlay()">
                                    <span>0</span>
                                </label>
                            </div>
                            <div class="amazing-checkbox">
                                <label>
                                    <input type="checkbox" name="x" value="1" onchange="randomPlay()">
                                    <span>1</span>
                                </label>
                            </div>
                        </td>
                        <td>

                            <div class="amazing-checkbox">
                                <label>
                                    <input type="checkbox" name="x" value="2" onchange="randomPlay()">
                                    <span>2</span>
                                </label>
                            </div>

                            <div class="amazing-checkbox">
                                <label>
                                    <input type="checkbox" name="x" value="3" onchange="randomPlay()">
                                    <span>3</span>
                                </label>
                            </div>

                            <div class="amazing-checkbox">
                                <label>
                                    <input type="checkbox" name="x" value="4" onchange="randomPlay()">
                                    <span>4</span>
                                </label>
                            </div>
                        </td>
                    </tr>
                </table>
                <br>
                <label for="y" class="panel__title">Координата Y</label>
                <br>
                <input type="text" name="y" id="y" placeholder="число от -3 до 3">
                <p></p>
                <div class="panel_r">Число R
                    <br>
                    <label><input type="radio" name="r" value="1" onchange="randomPlay()"><span>1</span></label>
                    <label><input type="radio" name="r" value="2" onchange="randomPlay()"><span>2</span></label>
                    <label><input type="radio" name="r" value="3" onchange="randomPlay()"><span>3</span></label>
                    <label><input type="radio" name="r" value="4" onchange="randomPlay()"><span>4</span></label>
                    <label><input type="radio" name="r" value="5" onchange="randomPlay()"><span>5</span></label>
                </div>
                <button id="submit" type="submit" class="submit-btn" >проверить</button>
            </form>
        </td>
        <td >
            <svg class="graph-view panel" viewBox="0 0 1000 1000">

                <path   d=" M100 500a400 400 45 0 1 400 -400 l0 400Z M500 300 h400 v200 h-400 h400l-400 400"
                        fill="#FFE033"
                        stroke-width="0"></path>

                <path   d=" M0 500l1000 0 -30 -20m30 20l-30 20M100 490l0 20M300 490l0 20M700 490l0 20
                            M900 490l0 20M500 1000l0 -1000 -20 30m20 -30l20 30M490 900l20 0M490 700l20 0
                            M490 300l20 0M490 100l20 0"
                        stroke="black"
                        fill="transparent"
                        stroke-width="3"></path>

                <text x="10%" y="49%" font-size="48" class="graph-view__text-x">-R</text>
                <text x="30%" y="49%" font-size="48" class="graph-view__text-x">-R/2</text>
                <text x="70%" y="49%" font-size="48" class="graph-view__text-x">R/2</text>
                <text x="90%" y="49%" font-size="48" class="graph-view__text-x">R</text>
                <text x="97%" y="48%" font-size="48" class="graph-view__text-x">x</text>

                <text x="52%" y="10%" font-size="48" class="graph-view__text-y">R</text>
                <text x="52%" y="30%" font-size="48" class="graph-view__text-y">R/2</text>
                <text x="52%" y="70%" font-size="48" class="graph-view__text-y">-R/2</text>
                <text x="52%" y="90%" font-size="48" class="graph-view__text-y">-R</text>
                <text x="53%" y="3%" font-size="48" class="graph-view__text-y">y</text>

            </svg>
        </td>
    </tr>
</table>
<table align="center">
    <tr> <td>
            <iframe name="result_frame" height=300px width=560px id="result_frame"
                    allowtransparenc frameborder=no scrolling="yes" ></iframe>
        </td>
    </tr>
</table>
<style>
    body{
        background-color: #4dcbcc;
        font-family: "Courier New";
        font-size: smaller;
    }
    .header{
        vertical-align: top;
        text-align: center;
        font-family: Serif;
        font-size: x-large;
        color: whitesmoke;
        background-image: url("img/not-fallen.jpg");
        background-repeat: no-repeat;
        background-size: contain;
        width: 100%;
        text-shadow: 1px 1px 1px #000;
    }

    .graph-view {
        width: 500px;
    }

    .amazing-checkbox{
        position: relative;
        width: 25px;
        height: 25px;
        cursor: pointer;
        margin: 25%;
    }
    .amazing-checkbox span {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
        line-height: 25px;
        text-align: center;
        user-select: none;
        cursor: pointer;
        border: dotted;

    }
    .amazing-checkbox input {
        border-style: dotted;
        position: absolute;
        opacity: 0;
        margin: 0;
        width: 100%;
        height: 100%;
    }

    .amazing-checkbox input:checked ~ span {
        background: url("img/paw.png") center/contain no-repeat;
    }


    .panel_r input{
        cursor: pointer;
        display: inline-block;
        padding: 0 0 0 0;
        margin:0;
        width: 20px;
        height: 20px;
    }

    .panel_r span{
        cursor: pointer;
        position: relative;
        right: 15px;
        bottom:6px;

    }
    .submit-btn {
        cursor: pointer;
        background: #4dcbcc;
        border-radius: 100px;
        font-size: larger;
        outline: none;
        margin: 15px;
        width: 150px;
        height: 150px;
    }

</style>
<script src="script.js"></script>
</body>
</html>
