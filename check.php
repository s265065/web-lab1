<?php
@session_start();
$start = microtime(true);
$x = $_GET["x"];
$y = $_GET["y"];
$r = $_GET["r"];
$check = "";
$currentTime = date("H:i:s", strtotime('+3 hour'));


echo "<!DOCTYPE HTML><html><head><meta charset='UTF-8'><title>ещё лапка</title><link rel='shortcut icon' href='img/paw.png'></head> 
        <body style='background-image: none'> 
        <style>
body{
    background-color: #4dcbcc;
    font-family: 'Courier New';
    font-size: smaller;
}

.container {
border: 5px;
border-color: indigo;
border-style: dot-dot-dash;
border-radius: 10px;
}
</style>
<div style=\"text-align: center;\">";
echo "<div class='container' style='padding:20px 0;'> <br> <table class='points'>
            <tr>  <td>X</td> <td>Y</td> <td>R</td> <td>результат</td> <td>время запроса</td> <td>время выполнения</td>  </tr> ";
if (
    ($x >= 0 && $y >= $x - $r && $y <= ($r / 2) && $x <= $r) ||
    ($x <= 0 && $y >= 0 && ($x * $x + $y * $y) <= ($r * $r))
){
    $check = "ура! котик не упал";
echo "<script>
function sendTMsg() {
       parent.postMessage('1', '*');    
    }
    sendTMsg();
</script>";
}
else {
    $check = "ты уронил котика(";
    echo "<script>
function sendFMsg() {
       parent.postMessage('0', '*');    
    }
   sendFMsg()
</script>";
}
$time = microtime(true) - $start;
array_push($_SESSION['arr'], "<tr> <td>$x</td> <td>$y</td> <td>$r</td>
                    <td><b>$check</b></td> <td>$currentTime</td> <td>$time</td> </tr>");


foreach ($_SESSION['arr'] as $item) {
    echo $item;
}

echo "</table> <br> </center>

</body> </html>";

?>
