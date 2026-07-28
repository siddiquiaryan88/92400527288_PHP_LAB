<?php
// MySQL String Functions DEMO (Without Database)

echo "<h2>MySQL String Functions Demo</h2>";

$name = "  John Doe  ";

echo "<h3>1. LENGTH()</h3>";
echo "LENGTH('$name') = " . strlen($name) . "<br>";

echo "<h3>2. CONCAT()</h3>";
echo "CONCAT('Hello', ' ', 'World') = Hello World<br>";

echo "<h3>3. CONCAT_WS()</h3>";
echo "CONCAT_WS('-', 'John', 'Doe', '25') = John-Doe-25<br>";

echo "<h3>4. TRIM(), LTRIM(), RTRIM()</h3>";
echo "Original: '$name'<br>";
echo "TRIM: '" . trim($name) . "'<br>";
echo "LTRIM: '" . ltrim($name) . "'<br>";
echo "RTRIM: '" . rtrim($name) . "'<br>";

echo "<h3>5. LPAD(), RPAD(), LOCATE()</h3>";
echo "LPAD('ABC', 5, '*') = " . str_pad('ABC', 5, '*', STR_PAD_LEFT) . "<br>";
echo "RPAD('ABC', 5, '*') = " . str_pad('ABC', 5, '*', STR_PAD_RIGHT) . "<br>";
echo "LOCATE('o', 'John Doe') = " . strpos('John Doe', 'o') . "<br>";
?>