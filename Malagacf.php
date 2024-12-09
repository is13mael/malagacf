<?php

$destinatario = 'ismaelparramoussaif@gmail.com';
$asunto = 'Donaciones por los afectados de la DANA €';

$usuario = $_POST['nombre'];
$mail = $_POST['mail'];
$comentarios = $_POST['Comentarios'];
$valoracion_de_la_gente = $_POST['valoracion'];
$donaciones = $_POST['Donaciones por los afectados de la DANA €'];

if (!$_POST){
    ?>
    <?php
}else{

    $cuerpito = "<span style='color:#781D22'>
    Petición de información de
  </span>: " . $usuario . "<br>"; 

  $cuerpito .= "<span style='color:#781D22'><b>
    Email
  </b></span>: " . $mail . "<br><br><dd>";

  $cuerpito .= "<span style='color:#781D22'>
    Descripción del proyecto
  </span>: " . $comentarios . "<br>";

  $cuerpito .= "<span style='color:#781D22'>
    Estado actual</span>: " .
  $valoracion_de_la_gente . "<br>";

  $cuerpito .= "<span style='color:#781D22'><b>
    Presupuesto aproximado
  </b></span>: " . $donaciones . "</dd>";

  $cabeza  = "MIME-Version: 1.0\r\n";
  $cabeza .= "Content-type: text/html; charset=utf-8\r\n";
  $cabeza .= "From:".$mail."\r\n";

  mail($destinatario, '=?UTF-8?B?'.base64_encode($asunto).'?=',
  $cuerpito, $cabeza);
    
  include 'confirmado.html';
}
?>