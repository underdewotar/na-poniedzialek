<form method="get" action="bbb.php">
 
<?php
$con = new mysqli("127.0.0.1","root","","uczen_piatek");
 
$q="SELECT * FROM `klasy`";
$ggg=0;
if($wynik=$con->query($q))
while($row=$wynik->fetch_array()){
 
 
echo "<input type='radio' name='gg' value='".$row[0]."'>" .$row[1] . ";" .$row[2] . ";" .$row[3] . "; <br/>";
$ggg++;
}
else
echo $con->errno . " " . $con->error;
?>
<input type="submit"/>
</form>