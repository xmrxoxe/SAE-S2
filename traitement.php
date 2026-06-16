<?php
var_dump($_POST);
$errors = [];

if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['email'] = "Vous n'avez pas renseigné votre message";
}


if(!empty($errors)){
    header('Location : contact.php');
    $session_start();
    $_SESSION['errors'] = $errors;
}else{
    $message = $_POST['message'];
    //$headers : 'FROM : '
}

var_dump($errors);
//die();


//$message = $_POST['message'];
//$headers = 'FROM: '
//mail('marionbochud@gmail.com', 'Formulaire de contact', $message, $headers);

?>