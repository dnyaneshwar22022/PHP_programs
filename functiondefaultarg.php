<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function sayHello($name="Dnyaneshwar"){
    echo "Hello $name<br/>";
}

sayHello("Venu");
sayHello(); //passing no value
sayHello("Nitish");
?>
</body>
</html>