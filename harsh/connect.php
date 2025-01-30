<?php
$s = "localhost";
$u = "root";
$p = "";
$d = "harsh";
extract($_POST);
echo $c1;
// Create connection
$c = new mysqli($s, $u, $p, $d);
// Check connection
if ($c->connect_error) 
{
  die("Connection failed: " . $c->connect_error);
}

$q = "INSERT INTO payment VALUES ($c1,'$c2',$c3,$c4)";
     

if ($c->query($q) === TRUE)
 {
  echo "New record created successfully";
} 
else 
{
  echo "Error: " . $q . "<br>" . $c->error;
}

$c->close();
?>

