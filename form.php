<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$project = $_POST['project'];
$message= $_POST['message'];


$to = "franconcarchedi@gmail.com";

$subject = "Franco Carchedi - Tienes un nuevo mensaje de " . $name;
$txt =" Nombre: ". $name . "\r\n Mail: ". $email . "\r\n Proyecto: ". $project . "\r\n Mensaje: " . $message;

$headers = "From: no-reply@francocarchedi.com";
mail($to,$subject,$txt,$headers);
//redirect
header("Location:index.html");
?>