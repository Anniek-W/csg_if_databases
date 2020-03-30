<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$leerling=array('nr' => 150136, 'voornaam' => 'Anniek', 'achternaam' => 'van Wigcheren', 'geboortejaar' => '2003');

echo "<pre>Leerling:";
print_r($leerling);
echo "</pre>";

echo $leerling['voornaam']." ".$leerling['achternaam']." werd geboren in ".$leerling['geboortejaar'];
echo '<br>';
echo current($leerling);
echo '<br>';
echo end($leerling);
/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>