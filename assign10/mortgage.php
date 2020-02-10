<html>
   <head>
      <link rel="stylesheet" type="text/css" href="assign10.css">
   </head>
</html>
<?php
   $apr = $_GET["apr"];
   $term = $_GET["term"];
   $amount = $_GET["amount"];
   echo "<div style=\"background-color: tan; width: 40%; margin: auto;\"><h1>Monthly Mortgage</h1><br></div>";
   echo "<div style=\"background-color: tan; width: 40%; margin: auto;\">APR: " . $apr . "<br></div>";
   echo "<div style=\"background-color: tan; width: 40%; margin: auto;\">Term: " . $term . "<br></div>";
   $apr /= 1200;
   $term *= 12;
   $total = $amount*($apr*pow(1+$apr, $term))/(pow(1+$apr, $term)-1);
   echo "<div style=\"background-color: tan; width: 40%; margin: auto;\">Amount: " . number_format($amount, 0) . "<br></div>";
   echo "<div style=\"background-color: tan; width: 40%; margin: auto;\">Total: " . number_format($total, 2) . "<br></div>";
   echo "<br> <br> <div style=\"background-color: #F6E3D2\"> <button class=\"button\" onclick=\"window.location='mortgage.html'\">Back to Calculator</button> </div>";
?>
