
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
$Employee = array(
    "Name" => "Dnyaneshwar",
    "Email" => "dnyaneshwarmavaskar155@gmail.com",
    "Age" => 21,
    "Gender" => "Male"
);

//display associative array elements through foreach loop
foreach ($Employee as $key => $element) {
    echo $key . ": " . $element;
    echo "<br/>";
}
?>
</body>
</html>