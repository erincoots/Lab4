<?php

function multiple($x, $y){
  $z = $x * $y;
  return $z;
}

for ($i = 1; $i <= 100; $i++){
  echo "<h5>";
  for ($j = 1; $j <= 100; $j++){
    echo " " . multiple($i, $j) . " ";
  }
  echo "</h5>";
}

?>
