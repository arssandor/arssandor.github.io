<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Destinatario dell'email
    $to = "it.alessandroromano@gmail.com";

    // Soggetto dell'email
    $subject = "Nuovo messaggio dal tuo sito web";

    // Intestazioni dell'email
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Invia l'email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email inviata con successo!";
    } else {
        echo "Si è verificato un errore durante l'invio dell'email.";
    }
}
?>
