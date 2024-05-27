<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Osadnicy - gra przeglądarkowa</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="content-wrap">
    
        <header>
            <div class="nav-close">X</div>


            <nav id="nav">
                <div class="menu-toggle">☰ Menu</div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="rejestracja.php">Rejestracja</a></li>
                    <li><a href="contact.html">Kontakt</a></li>
                    <li><a href="calculator.html">Sklep</a></li>
                </ul>
            </nav>

        </header>
	<section>
	Dziękujemy za rejestrację w serwisie! Możesz już zalogować się na swoje konto!<br /><br />
	
	<a href="index.php">Zaloguj się na swoje konto!</a>
	<br /><br />
	
        </section>
    </div>
    
    <footer>
        <p>&copy; 2024 Jakub Pielichowski Jeremiasz Roskowiński . All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
    <script src="scripts.js"></script>

</body>
</html>