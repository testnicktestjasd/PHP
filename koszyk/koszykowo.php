<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<?php


session_start();

$procesor1=$_POST['procesor1'];
$ram1=$_POST['ram1'];
$plyta1=$_POST['plyta1'];
$grafika1=$_POST['grafika1'];
$monitor1=$_POST['monitor1'];
$klawiatura1=$_POST['klawiatura1'];
$myszka1=$_POST['myszka1'];
$dysk1=$_POST['dysk1'];
$zasilacz1=$_POST['zasilacz1']; 
$naped1=$_POST['naped1']; 



$produkty = array('procesor','ram','plyta','grafika','monitor','klawiatura','myszka','dysk','zasilacz','naped');	
$produkty[0] ='procesor';
$produkty[1] ='ram';
$produkty[2] ='plyta';
$produkty[3] ='grafika';
$produkty[4] ='monitor';
$produkty[5] ='klawiatura';
$produkty[6] ='myszka';
$produkty[7] ='dysk';
$produkty[8] ='zasilacz';	
$produkty[9] ='naped';

$ceny = array('procesor'=>300,'ram'=>150,'plyta'=>250,'grafika'=>180,'monitor'=>340,'klawiatura'=>60,
'myszka'=>65,'dysk'=>260,'zasilacz'=>230,'naped'=>110);
$ceny['procesor'] = 300;
$ceny['ram'] = 150;
$ceny['plyta'] = 250;
$ceny['grafika'] = 180;
$ceny['monitor'] = 340;
$ceny['klawiatura'] = 60;
$ceny['myszka'] = 65;
$ceny['dysk'] = 260;
$ceny['zasilacz'] = 230;
$ceny['naped'] = 110;


$ilosc = array('procesor'=>$procesor1,'ram'=>$ram1,'plyta'=>$plyta1,'grafika'=>$grafika1,'monitor'=>$monitor1,
'klawiatura'=> $klawiatura1,'myszka'=>$myszka1,'dysk'=>$dysk1,'zasilacz'=>$zasilacz1,'naped'=>$naped1);
$ilosc['procesor'] = $procesor1;
$ilosc['ram'] = $ram1;
$ilosc['plyta'] = $plyta1;
$ilosc['grafika'] = $grafika1;
$ilosc['monitor'] = $monitor1;
$ilosc['klawiatura'] = $klawiatura1;
$ilosc['myszka'] = $myszka1;
$ilosc['dysk'] = $dysk1;
$ilosc['zasilacz'] = $zasilacz1;
$ilosc['naped'] = $naped1;



/// ceny produktów 
$w_procesor= $ilosc['procesor'] *$ceny['procesor'];
$w_ram=$ilosc['ram']*$ceny['ram'];
$w_plyta=$ilosc['plyta']*$ceny['plyta'];
$w_grafika=$ilosc['grafika']*$ceny['grafika'];
$w_monitor=$ilosc['monitor']*$ceny['monitor'];
$w_klawiatura=$ilosc['klawiatura']*$ceny['klawiatura'];
$w_myszka=$ilosc['myszka']*$ceny['myszka'] ;
$w_dysk=$ilosc['dysk']*$ceny['dysk'] ;
$w_zasilacz=$ilosc['zasilacz']*$ceny['zasilacz'];
$w_naped=$ilosc['naped']*$ceny['naped'];



$koszty = array ('procesor'=>$w_procesor,'ram'=>$w_ram,'plyta'=>$w_plyta,'grafika'=>$w_grafika,'monitor'=>$w_monitor,
'klawiatura'=>$w_klawiatura,'myszka'=>$w_myszka,'dysk'=>$w_dysk,'zasilacz'=>$w_zasilacz,'naped'=>$w_naped); 



$suma = array_sum($koszty); 



if(!isset($_SESSION['koszyk'])) 
{
$_SESSION['koszyk'] = 0;
}

if ($_SESSION['koszyk']=array($produkty,$ceny,$ilosc,$koszty))
{
/// foreach($_SESSION['koszyk'] as $key=>$val)



echo	'Procesor: szt.'.$ilosc['procesor'].' cena ='.$koszty['procesor'].'zł <br>';
echo	'Pamięć RAM: szt.'.$ilosc['ram'].' cena ='.$koszty['ram'].'zł <br>';
echo	'Płyta główna: szt.'.$ilosc['plyta'].' cena ='.$koszty['plyta'].'zł <br>';
echo	'Karta graficzna: szt.'.$ilosc['grafika'].' cena='.$koszty['grafika'].'zł <br>';
echo	'Monitor: szt.'.$ilosc['monitor'].' cena='.$koszty['monitor'].'zł <br>';
echo 'Klawiatura: szt.'.$ilosc['klawiatura'].' cena='.$koszty['klawiatura'].'zł <br>';
echo	'Myszka: szt.'.$ilosc['myszka'].' cena='.$koszty['myszka'].'zł <br>';
echo	'Dysk: szt.'.$ilosc['dysk'].' cena='.$koszty['dysk'].'zł <br>';
echo	'Zasilacz: szt.'.$ilosc['zasilacz'].' cena='.$koszty['zasilacz'].'zł <br>';
echo	'Napęd: szt.'.$ilosc['naped'].' cena='.$koszty['naped'].'zł <br><br>';

echo	'<b>RAZEM </b>'.$suma.'zł';


}


?>
