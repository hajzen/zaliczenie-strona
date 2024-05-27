<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Pobierz dane z formularza
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Ustal stały adres e-mail odbiorcy
    $to = "hajzencsgo@gmail.com";

// Ustal temat wiadomości
$subject = "Wiadomość z formularza kontaktowego od: $name";

// Przygotuj nagłówki e-maila
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Przygotuj treść wiadomości
$body = "<h2>Nowa wiadomość z formularza kontaktowego</h2>";
$body .= "<p><strong>Imię:</strong> $name</p>";
$body .= "<p><strong>Email:</strong> $email</p>";
$body .= "<p><strong>Wiadomość:</strong><br>$message</p>";

// Wyślij e-mail
if (mail($to, $subject, $body, $headers)) {
echo "Wiadomość została wysłana pomyślnie.";
} else {
echo "Wystąpił błąd podczas wysyłania wiadomości.";
}
} else {
echo "Nieprawidłowa metoda żądania.";
}
?>
