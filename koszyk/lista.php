<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset ="utf-8">
</head>
<body>

<p><b>Lista zakupów</b></p>
<?php

if(isset($_POST['lista']))
	{
		if(!empty($_SESSION['koszyk']))
			{
				$koszyk = (array_merge(unserialize($_SESSION['koszyk']),$_POST['lista']));
				$_SESSION['koszyk']=serialize($koszyk);
			}
		else
			{
				$_SESSION['koszyk']=serialize($_POST['lista']);
			}
			echo "Produkty zostały umieszczone w koszyku";
	}
?>

<p>Wybór produktów:</p>


<form action="lista.php" method="post">
<select name="lista[]" multiple="multiple" size="5">
	<option value="Monitor">Monitor</option>
	<option value="Procesor">Procesor</option>
	<option value="Dysk twardy">Dysk twardy</option>
	<option value="Pamięć RAM">Pamięć operacyjna</option>
	<option value="Karta graficzna">Karta graficzna</option>
</select>
<br><input type="submit" value="Wyślij">
</form>
<p><a href="koszyk.php">Przejdź do koszyka</a></p>

</body>
</html>
