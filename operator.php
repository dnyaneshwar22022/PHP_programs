<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// class declaration
class Developer {}
class Programmer {}

// creating an object of type Developer
$charu = new Developer();

// testing the type of object
if ($charu instanceof Developer)
    echo "Charu is a developer.";
else
    echo "Charu is a programmer.";

echo "</br>";

var_dump($charu instanceof Developer);
var_dump($charu instanceof Programmer);

// It will return true
// It will return false.
?> 
</body>
</html>