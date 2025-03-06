<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//declare array
$Season = array ("Summer", "Winter", "Autumn", "Rainy");

//access array elements using foreach loop
foreach ($Season as $element) {
    echo $element;
    echo "<br/>";
}
?>
</body>
</html>