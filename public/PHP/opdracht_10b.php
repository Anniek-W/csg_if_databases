<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

require('database.php');
$database = "postcode";
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);
$straat = "J.M.den Uylstraat";
$plaatsnamen=array();
echo "<h2>RESULTAAT</h2>";
$sql = "SELECT DISTINCT(plaats) FROM postcode WHERE straat='J.M. den Uylstraat' ORDER BY plaats ASC";
$records = mysqli_query($DBverbinding, $sql);
      
while($record = mysqli_fetch_assoc($records)) {
  echo $record["plaats"]."<br>";
  array_push($plaatsnamen,$record["plaats"]);
}


foreach($plaatsnamen as $value){
    echo $value."<br>";
}
echo "<h2>tweede deel</h2>";
$straatnamen=array();
$sql = "SELECT DISTINCT(straat) FROM postcode WHERE plaats ='Klijndijk' ORDER BY straat ASC";
$records = mysqli_query($DBverbinding, $sql);

while($record = mysqli_fetch_assoc($records)) {
  array_push($straatnamen,$record["straat"]);
}

foreach($straatnamen as $straat){
    $sql = "SELECT COUNT(*) AS aantal FROM postcode WHERE straat='$straat'";
    $records = mysqli_query($DBverbinding, $sql);

    while($record = mysqli_fetch_assoc($records)) {
        echo $straat." | ".$record["aantal"]."<br>";
    }
    
}

mysqli_close($DBverbinding);  

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>