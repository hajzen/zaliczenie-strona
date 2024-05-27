<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zasoby</title>
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
<?php

	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
	echo " | <b>Kamień</b>: ".$_SESSION['kamien'];
	echo " | <b>Zboże</b>: ".$_SESSION['zboze']."</p>";
	
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	echo "<br /><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";
	
?>
    </section>
    </div>
    <footer>
        <p>&copy; 2024 Jakub Pielichowski Jeremiasz Roskowiński . All rights reserved.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>