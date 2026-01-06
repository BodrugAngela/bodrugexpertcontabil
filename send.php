<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
$name = htmlspecialchars($_POST["name"]);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST["message"]);

$to = "angela.bodrug79@gmail.com";
$subject = "Mesaj nou de pe site";
$body = "Nume: $name\nEmail: $email\nMesaj:\n$message";
$headers = "From: $email";

mail($to,$subject,$body,$headers);
echo "Mesaj trimis cu succes!";
}
?>
