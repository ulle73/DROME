<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "rydqvist89@hotmail.com"; // Ersätt med din e-postadress
    $subject = "Nytt meddelande från $name";
    $headers = "From: $email";

    // Skicka e-post
    mail($to, $subject, $message, $headers);
}
?>
