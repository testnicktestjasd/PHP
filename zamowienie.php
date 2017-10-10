<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title> Podsumowanie zamówienia. </title>
</head>
<body>

<?php 

$paczkow = $_POST['paczki']; //odebranie danych z formularza ['paczki']
$grzebieni = $_POST['grzebienie']; //odebranie danych z formularza ['grzebienie']
$suma = 0.99*$paczkow + 1.29 * $grzebieni; // ile trzeba zaplacic xD!

//wyswietlenie 
echo "Kupiłeś / wybrałeś: <br> <b>Pączków: </b> $paczkow <Br>  <b> Grzebieni: </b> $grzebieni";
echo "<br />";
//suma


echo "<b> Suma: </b> $suma"; //wyswietlenie sumy

?>

</body>
</html>
