<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harsh Tours & Travels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<title> Payment Details </title>
</head>

<body>
<nav class="a">
        <div class="logo">
            
            <h1><img src="logo 1.png"></h1>
        </div>
         <div class="item">
            <a href="index.html">Home</a>
            <a href="about us.html">About us</a>
            <a href="Ratelist.html">Rate List</a>
                 <a href="contactus.html">Contact us</a>
            <a href="quickpayment.html">Quick Payment</a>
          
        </div>
        <div class="btn">
            <input type="button" value="Login">
           
        </div>
    </nav>
    <br>
    <br>
  
<?php

 
$s = "localhost";
$u = "root";
$p = "";
$d = "harsh";
// Create connection
$c = new mysqli($s, $u, $p, $d);
// Check connection
if ($c->connect_error) 
{
  die("Connection failed: " . $c->connect_error);
}
$sql = "SELECT * from payment";
$result = $c->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
 
  echo "<center>";
    echo "<h2>";
    echo "<table  width=550px height=450px bgcolor=#FFA07A  border=1 align=center cellspacing=10% cellpadding=10%>";
    echo "<tr>";
    echo "<td colspan=4 bgcolor=#FF0000 align=center><b>Payment Details</b></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Card Number</td>";
    echo "<td>Expiry Date</td>";
    echo "<td>CVV</td>";
    echo "<td>Amount</td>";
    echo "</tr>";
  while($r = $result->fetch_assoc())
   {
    
    echo "<tr>";
       echo "<td>".$r["card number"]."</td>";
       echo "<td>".$r["expiry date"]."</td>";
       echo "<td>".$r["cvv"]."</td>";
       echo "<td>".$r["amount"]."</td>";
       echo "</tr>";
       echo "</center>";
    
  }
} else {
  echo "0 results & no rows found";
}
$c->close();

?>

