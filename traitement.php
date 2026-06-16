<?php
var_dump($_POST);
$message = $_POST['message'];
$headers = 'FROM: '
mail('marionbochud@gmail.com', 'Formulaire de contact', $message, $headers);

?>