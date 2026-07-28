<?php
// Simple calculator functions
function add($a, $b) { return $a + $b; }
function sub($a, $b) { return $a - $b; }
function mul($a, $b) { return $a * $b; }
function div($a, $b) { 
    if($b == 0) return "Cannot divide by zero";
    return $a / $b; 
}

$result = "";

if(isset($_POST['calc'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];
    
    if($op == '+') $result = add($n1, $n2);
    elseif($op == '-') $result = sub($n1, $n2);
    elseif($op == '*') $result = mul($n1, $n2);
    elseif($op == '/') $result = div($n1, $n2);
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Simple Calculator</h2>
    <form method="POST">
        <input type="number" name="n1" required>
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="n2" required>
        <input type="submit" name="calc" value="=">
    </form>
    
    <?php if($result != "") echo "<h3>Result: $result</h3>"; ?>
</body>
</html>