<?php
$keys = array(
 "field1"=>"first",
 "field2"=>"second",
 "field3"=>"third"
);
$values = array(
 "field1value"=>"dinosaur",
 "field2value"=>"pig",
 "field3value"=>"platypus"
);

// Tạo mảng kết quả
$keyValue = array();
foreach ($keys as $key => $keyLabel) {
    if (array_key_exists($key . 'value', $values)) {
        $keyValue[$keyLabel] = $values[$key . 'value'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mảng PHP</title>
</head>
<body>
    <h2>Mảng kết quả là:</h2>
    <pre>
        <?php print_r($keyValue); ?>
    </pre>
</body>
</html>
