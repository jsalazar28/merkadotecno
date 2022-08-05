<?php
$asunto = $_POST[´asunto`];
$nombre = $_POST[´nombre`];
$email = $_POST[´email`];
$mensaje = $nombre . "\n". $_POST[´mensaje`];


mail("gcnataly@misena.edu.co", $asunto,$mensaje, FROM:"$email");

echo "<script> alert("el mensaje fue enviado")</script>;"

header("location:contacto.html");

?>
