<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
PHP Switch Example

<?php
$num = 20;
switch($num) {
    case 10:
        echo("number is equal to 10");
        break;
    case 20:
        echo("number is equal to 20");
        break;
    case 30:
        echo("number is equal to 30");
        break;
        default:
        echo("number is not equal to 10,20 or 30");
    }
    ?>
</body>
</html>