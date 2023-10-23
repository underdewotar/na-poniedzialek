<?php
$l=$_GET['LP'];
$i=$_GET['Imie'];
$n=$_GET['Nazwisko'];
$k=$_GET['Klasa'];
$s=$_GET['Srednia'];

$con = new mysqli("127.0.0.1","root","","uczen_piatek");
$q="INSERT INTO `klasy` (`LP`, `imie`, `nazwisko`, `klasa`, `srednia`) VALUES ('".$l."', '".$i."', '".$n."', '".$k."', '".$s."')";
mysqli_query($con, $q);

 
 
?>