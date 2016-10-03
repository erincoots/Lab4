<?php

$username = $_POST["username"];
$password = $_POST["password"];
$q1 = $_POST["quantity1"];
$b_sub = $q1 * 15;
$q2 = $_POST["quantity2"];
$n_sub = $q2 * 20;
$q3 = $_POST["quantity3"];
$r_sub = $q3 * 10;
$shipping = $_POST["shipping"];

if($shipping == "7day"){
  $shipping = "7 Day";
  $ship_sub = 0;
}
else if($shipping == "3day"){
  $shipping = "3 Day";
  $ship_sub = 5;
}
else if($shipping == "overNight"){
  $shipping = "Over Night";
  $ship_sub = 50;
}

$total = $b_sub + $n_sub + $r_sub + $ship_sub;

echo "<h3>Your Username: $username</h3>";
echo "<h3>Your Password: $password</h3>";

echo "<table>";
echo "<tr><th><h1>Your Receipt</th></tr>";
echo "<tr><th>Item</th><th>Quantity</th><th>Cost Per</th><th>Subtotal</th></tr>";
echo "<tr><td>Bracelet</td><td>$q1</td><td>$15</td><td>$$b_sub</td></tr>";
echo "<tr><td>Necklace</td><td>$q2</td><td>$20</td><td>$$n_sub</td></tr>";
echo "<tr><td>Ring</td><td>$q3</td><td>$10</td><td>$$r_sub</td></tr>";
echo "<tr><td>Shipping Option</td><td>$$ship_sub</td></tr>";
echo "<tr><td>Total</td><td>$total</td></tr>";
echo "</table>";

?>
