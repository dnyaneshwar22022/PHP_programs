<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function adder(&$str2) {
    $str2 .= 'Call By Reference';
}
$str = 'Hello';
adder($str);
echo $str;
?>
</body>
</html>