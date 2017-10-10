<?php
$nick = $_POST['login'];
$haslo = $_POST['haslo'];


if(IsSet($_POST['login'])&&isSet($_POST['haslo']))
{
	if($_POST['login']=='admin' && $_POST['haslo']=='admin') //sprawdza czy login = admin i haslo =admin
	{
		echo "Udalo Ci sie zalogowac!";
		header('location: trzeciastrona.php'); //jesli tak to przekieruje na trzeciastrona.php
	}
	else
	{
		echo "Zle dane logowania"; // jesli nie to nie xD
	}
}

?>