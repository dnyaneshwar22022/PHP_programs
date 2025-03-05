<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5;
    function mytest()
    {
        $x = 7;
        echo "value of x:" .$x;
    }
    mytest();
    ?>
</body>
</html>