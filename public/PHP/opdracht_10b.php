<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

require('database.php');
$database = "postcode";
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);
$straat = "J.M. den Uylstraat";
echo "<h2>RESULTAAT</h2>";
$sql = "SELECT DISTINCT(plaats) FROM poscode WHERE straat='$straat' ORDER BY plaats ASC";
$records = mysqli_query($DBverbinding, $sql);
      
while($record = mysqli_fetch_assoc($records)) {
  echo $record["plaats"]."<br>";
}
mysqli_close($DBverbinding);  

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>