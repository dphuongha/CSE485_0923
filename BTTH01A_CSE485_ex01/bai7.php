<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
    echo "Các số từ 100 -> 200 và chia hết cho 5 trong mảng là: ";

    foreach($array as $i) {
        if($i >= 100 && $i <= 200 && $i % 5 === 0) {
            echo "<br>";
            echo $i . " <br> ";
        }
    }
    ?>
</body>
</html>