<?php
session_start();
if(isset($_POST['wyczysc']))
{
 session_destroy();
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset ="utf-8">
</head>
<body>

	<p><b>Zawartość koszyka:</b></p>
	<ul>
<?php
		if(isset($_SESSION['koszyk']))
		{
			foreach(unserialize($_SESSION['koszyk']) as $produkt)
			{
				echo "<li>".$produkt."</li>";
			}
		}
	else
	{
		echo"Koszyk pusty (błąd sesji)";
	}
	
?>
</ul>
<form action="koszyk.php" method="post">

<input type="submit" name="wyczysc" value="Wyczyść koszyk" /> Kliklij dwukrotnie aby wyczyścić
<p><a href="lista.php">Przejdź do zakupów</a</p>
</form>

</body>
</html>
