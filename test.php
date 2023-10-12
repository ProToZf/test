<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $address = $_POST["address"];
    $title = $_POST["title"];
    
    $to = "demory.thomas1@gmail.com";
    $subject = "message de formulaire de contact: $title ";
    $headers = "De : $email";

    mail($to, $subject, $message, $headers);
}
?>