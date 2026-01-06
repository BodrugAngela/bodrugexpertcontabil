<?php
if ($_SERVER["REQUEST_METHOD"]==="POST"){
$email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST["message"]);
mail("angela.bodrug79@gmail.com","Mesaj nou",$message,"From: $email");
echo "OK";
}
?>