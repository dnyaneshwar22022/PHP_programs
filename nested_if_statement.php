<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Example
<?php
        $age = 23;
        $nationality = "Indian";
// applying conditions on nationality and age
if ($nationality == "Indian") {
    if ($age >= 18) {
        echo "Eligible to give vote";
    } else {
        echo "Not eligible to give vote";
    }
}
?>
</body>
</html>