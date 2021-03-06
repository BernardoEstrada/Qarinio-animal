<?php
function get_self_domain(){return "qarinoanimal.com";}
function get_self_email(){
    return "contacto@".get_self_domain();
}

function send_email($recipient, $subject, $contenido){
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.get_self_email()."\r\n".
        'Reply-To: '.get_self_email()."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $body = include "_email.php";
    return mail($recipient, $subject, $body, $headers);
    //return true;
}

function send_email_contacto($solicitante, $nombre, $mensaje){
    $contenido = "<h2></h2>";
    $contenido.="<h4></h4>";
    $contenido.="<strong>$nombre ha escrito:</strong><p class='msg'>$mensaje</p>";
    $contenido.="<h4>Responde a $nombre al correo <a href='mailto:$solicitante'>$solicitante</a></h4>";

    $contSolic="<h2>¡Gracias por escribirnos!</h2>";
    $contSolic.="<h4>Nos pondremos en contacto contigo lo antes posible.</h4>";
    $contSolic.="<strong>Tu Mensaje:</strong><p class='msg'>$mensaje</p>";
    $contSolic.="Si tienes más dudas te invitamos a visitar nuestras páginas de 
    <a href='https://". get_self_domain() ."/preguntasFrecuentes'>preguntas frecuentes</a>
     y  
    <a href='https://". get_self_domain() ."/comoAyudar'>cómo ayudar.</a><br>";

    $res = send_email($solicitante, "Gracias por ponerte en contacto con Qariño Animal", $contSolic) &&
            send_email(get_self_email(), "Contacto Qariño Animal", $contenido);
    return $res;
}

function send_email_verif($email, $nombre, $uid){
    $cont="<h3>$nombre, gracias por crear tu cuenta</h3>";
    $cont.="Accede al siguiente link para verificar tu contraseña: ";
    $cont.="<a href='https://". get_self_domain() . "/verificaEmail?id=" . $uid ."'>Verifica Tu Correo</a>";
    return send_email($email, "Verifica tu cuenta en Qariño Animal", $cont);
}


function send_email_contr($email, $nombre, $uid){
    $cont="<h3>$nombre, has solicitado un cambio de contraseña.</h3>";
    $cont.="Accede al siguiente link para cambiar tu contraseña: ";
    $cont.="<a href='https://". get_self_domain() . "/cambiarContra?id=" . $uid ."'>Cambia tu contraseña</a>";
    return send_email($email, "Cambia tu contraseña de Qariño Animal", $cont);
}















