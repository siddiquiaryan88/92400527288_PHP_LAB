<?php
$a = 25;
$b = 10;
$c = 40;

// Maximum
if ($a >= $b && $a >= $c)
    $max = $a;
elseif ($b >= $a && $b >= $c)
    $max = $b;
else
    $max = $c;

// Minimum
if ($a <= $b && $a <= $c)
    $min = $a;
elseif ($b <= $a && $b <= $c)
    $min = $b;
else
    $min = $c;

echo "Maximum Number = $max<br>";
echo "Minimum Number = $min";
?>