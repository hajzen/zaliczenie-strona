<?php
// Połączenie z bazą danych (zastąp odpowiednimi danymi dostępowymi)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "uzytkownicy";

$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Przykładowe dane z formularza
$zboze = $_POST['zboze'];
$drewno = $_POST['drewno'];
$kamien = $_POST['kamien'];

// Wykonanie zapytania SQL
$sql = "INSERT INTO zakupy (nazwa_przedmiotu, cena, ilosc, data_zakupu) 
VALUES ('Zboże', '$stawkazboze', '$zboze', NOW()),
('Drewno', '$stawkadrewno', '$drewno', NOW()),
('Kamień', '$stawkakamien', '$kamien', NOW())";

if ($conn->query($sql) === TRUE) {
echo "Zakupy zostały zapisane pomyślnie";
} else {
echo "Błąd: " . $sql . "<br>" . $conn->error;
}

// Zamknięcie połączenia
$conn->close();
?>
