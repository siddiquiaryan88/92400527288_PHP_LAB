<?php
// Arithmetic Operators
$a = 20;
$b = 10;

echo "Arithmetic Operators:\n";
echo "Addition: " . ($a + $b) . "\n";
echo "Subtraction: " . ($a - $b) . "\n";
echo "Multiplication: " . ($a * $b) . "\n";
echo "Division: " . ($a / $b) . "\n";
echo "Modulus: " . ($a % $b) . "\n\n";

// Comparison Operators
echo "Comparison Operators:\n";
echo ($a == $b ? "a is equal to b" : "a is not equal to b") . "\n";
echo ($a > $b ? "a is greater than b" : "a is not greater than b") . "\n\n";

// Logical Operators
$x = true;
$y = false;

echo "Logical Operators:\n";
echo "x AND y = " . ($x && $y ? "true" : "false") . "\n";
echo "x OR y = " . ($x || $y ? "true" : "false") . "\n";
echo "NOT x = " . (!$x ? "true" : "false") . "\n\n";

// Assignment Operators
$c = 5;
$c += 3; // same as c = c + 3

echo "Assignment Operator:\n";
echo "Value of c after += 3: $c\n\n";

// Increment/Decrement Operators
$d = 10;

echo "Increment/Decrement Operators:\n";
echo "Original d: $d\n";
echo "d++ = " . $d++ . "\n";
echo "After d++: $d\n";
echo "--d = " . --$d . "\n";
?>