<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// add() function with two parameters
function add($x, $y) {
    $sum = $x + $y;
    echo "Sum = $sum <br><br>";
}

// sub() function with two parameters
function sub($x, $y) {
    $sub = $x - $y;
    echo "Diff = $sub <br><br>";
}

// Call function, get two arguments through input box and click on add or sub
if (isset($_POST['add'])) {
    // Call add() function
    add($_POST['first'], $_POST['second']);
}

if (isset($_POST['sub'])) {
    // Call sub() function
    sub($_POST['first'], $_POST['second']);
}
?>

<form method="post">
    Enter first number: <input type="number" name="first"/><br><br>
    Enter second number: <input type="number" name="second"/><br><br>
    <input type="submit" name="add" value="ADDITION"/>
    <input type="submit" name="sub" value="SUBTRACTION"/>
</form>
</body>
</html>