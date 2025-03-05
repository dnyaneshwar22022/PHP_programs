<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name = "Chaitanya"; // Global Variable
function global_var()
{
    global $name;
    echo "Variable inside the function: " . $name;
    echo "<br>";
}

global_var();
echo "Variable outside the function: " . $name;
?>
</body>
</html>