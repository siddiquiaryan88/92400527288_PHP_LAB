<?php

echo "<h2>Printing Numbers from 5 to 10 Using FOR Loop</h2>";
for ($i = 5; $i <= 10; $i++) {
    echo "Number: " . $i . "<br>";
}

echo "<hr>";

echo "<h2>Printing Numbers from 5 to 10 Using FOREACH Loop</h2>";


$numbers = array(5, 6, 7, 8, 9, 10);

foreach ($numbers as $number) {
    echo "Number: " . $number . "<br>";
}

echo "<hr>";

echo "<h2>Program Completed Successfully</h2>";

?>