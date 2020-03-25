<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=round($rec,7);
$afgeronds=floor(1000000*$rec)/1000000;
$a=12;
$b=13;
$c=sqrt(pow($a,2)+pow($b,2));
$d=floor(14/3);
$e=14 % 3;


echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $afgeronds<br>";
echo "c= $c<br>";
echo "14 gedeeld door 3 is $d met rest $e";      

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>