<?php
return "
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<style>
* {
    font-family: sans-serif;
    text-align: left;
}
.msg{
    background-color: lightgray;
}
</style>
</head>

<body>
<img src='https://".get_self_domain()."/img/logo.png' width='100'>
<hr>
$contenido
<hr>
<footer>
    Visítanos: <a href='https://". get_self_domain() ."'>". get_self_domain() ."</a>
    <p><a href='mailto:" . get_self_email() . "' target='_blank'>" . get_self_email() . "</a></p>
    <p><a href='https://www.google.com/maps/place/Cari%C3%B1o+Animal/@20.614042,-100.325978,15z/data=!4m5!3m4!1s0x0:0x50ca41cc6a7e5d59!8m2!3d20.614042!4d-100.325978' target='_blank'>Av Ferrocarril 63, La Cañada, Queretaro Queretaro, 76800 Santiago de Querétaro, Qro.</a></p>
    <p>2020 © Qariño Animal</p>
</footer>
</body>
</html>
";