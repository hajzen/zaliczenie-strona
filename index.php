<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
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
	<form action="zaloguj.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br/><br />
		<input type="submit" value="Zaloguj się" />
        
       
        
	</form>
        </section>
    </div>
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>
    <footer>
        <p>&copy; 2024 Jakub Pielichowski Jeremiasz Roskowiński . All rights reserved.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>