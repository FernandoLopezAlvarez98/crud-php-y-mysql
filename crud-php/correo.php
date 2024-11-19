<?php

$client_name = "Feranndo";

$name = "Corte y Estilo";
$asunto = "Reservación para corte de cabello";
$msg = "Estimado '$client_name', le informamos que su cita es el dia xx a las xx horas, le recomendamos asistir 15 minutos antes. Si desea cancelar puede hacerlo hasta 1 hora antes.";
$email = "lfer7093@gmail.com";



$header = "From: noreply@example.com" . "\r\n";
$header = "Reply To: noreply@example.com" . "\r\n";
$header = "X-Mailer: PHP" . phpversion();

//Correo al que se le envía
$mail = mail($email,$asunto,$msg,$header);

if($mail){
    echo "<h4>¡Mail enviado exitosamente!</h4>";
}

?>