<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// declare multi-dimensional array
$a = array();
$a[0][0] = "Dnyaneshwar";
$a[0][1] = "Venu";
$a[1][0] = "Joel";
$a[1][1] = "Nitish";
// display multi-dimensional array elements through foreach loop
foreach ($a as $e1) {
    foreach ($e1 as $e2) {
        echo "$e2\n";
    }
}
?>
</body>
</html>