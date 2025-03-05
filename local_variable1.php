<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function local_var()
{
    $num = 45; // local variable
    echo "Local variable declared inside the function is: " . $num;
}
local_var();
?>
</body>
</html>