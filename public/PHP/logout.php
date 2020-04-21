<?PHP
session_start();
session_unset();
session_destroy();
echo '<form method="POST" action="">
     <input type="submit" name="logout" value="uitloggen">
   </form>'; 

header("Location: opdracht_12b.php") // VOOR HET MAKEN VAN DE OPDRACHT

//header("Location: opdracht_12b_uitw.php"); // VOOR UITWERKINGEN
?>