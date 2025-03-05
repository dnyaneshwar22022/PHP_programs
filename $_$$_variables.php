<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = "U.P";
$$x = "Lucknow";

echo $x . "<br>";
echo $$x . "<br>";
echo "Capital of $x is " . $$x;
?>
</body>
</html>