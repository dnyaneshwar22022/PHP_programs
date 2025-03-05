<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function static_var()
{
    static $num1 = 3;  // static variable
    $num2 = 6;         // Non-static variable

    $num1++;  // increment in static variable
    $num2++;  // increment in non-static variable

    echo "Static: " . $num1 . "<br>";
    echo "Non-static: " . $num2 . "<br>";
}

// First function call
static_var();

// Second function call
static_var();
?>
</body>
</html>