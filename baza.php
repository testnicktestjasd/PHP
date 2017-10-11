<?php 

$polaczenie= mysqli_connect('localhost','klasa4tibgr1','qwerty');

if(!$polaczenie)
{
 echo "Blad poloaczenia z SQL <br />";
 exit();
}

else
{
 echo "Polaczono  z serwerem SQL<br />";
}

if(!mysqli_select_db($polaczenie,'baza4tibgr1'))
{
 echo "Blad wyboru bazy danych<br />";
 exit();
}
else
{
 echo "Wybrano baze danych<br />";
}

echo "<hr />";

$zapytanie=mysqli_query($polaczenie,"SELECT distinct * FROM filmy WHERE tytul LIKE '%o%'");

if(!$zapytanie)
{
 echo "Blad w zapytaniu";
 exit();
}

while($wiersze = mysqli_fetch_array($zapytanie))
{
 echo $wiersze['tytul']." ".$wiersze['rok_produkcji']." ".$wiersze['cena']."<br />";
}


echo "<hr />";


if(!mysqli_close($polaczenie))
{
 echo "Nie udalo sie wylaczyc<br />";
 exit();
 
}

else
{
 echo "Zakonczono prace z baza<br />";
}
?>
