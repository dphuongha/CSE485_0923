<?php 
$array1 = [
    [77, 87],
    [23, 45]
];

$array2 = [
    'giá trị 1', 'giá trị 2'
];

$result = [];

foreach ($array2 as $key => $value) {
    $result[$key] = [$value] + $array1[$key];
}

print_r($result);

?>