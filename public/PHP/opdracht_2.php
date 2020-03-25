<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$tekst="Ik heb een bijbaantje bij de Aldi. De Aldi betaalt goed.";
echo "$tekst";
$tekst=str_replace('Aldi','Albert Heijn',$tekst);
$tekst=strstr($tekst,"De");
echo '<h4>'.$tekst.'</h4>';
$lengte=strlen ($tekst);
echo '<i>de string $tekst bestaat uit <b>'.$lengte.'</b> karakters</i><br>';
$tekst=substr($tekst,10,5);
echo "$tekst<br>";
echo strrev($tekst).'<br>';
echo str_repeat($lengte,13);

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>