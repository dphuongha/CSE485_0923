<?php 
function convertToUpperCase($arr) {
    $result = array_map('strtoupper', $arr);
    return $result;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'b', 'c', 'd'];
$arr3 = ['a', 0, null, false];

$result1 = convertToUpperCase($arr1);
$result2 = convertToUpperCase($arr2);
$result3 = convertToUpperCase($arr3);

echo "Mảng 1 sau khi chuyển: ";
print_r($result1);

echo "<br>";

echo "Mảng 2 sau khi chuyển: ";
print_r($result2);

echo "<br>";

echo "Mảng 3 sau khi chuyển: ";
print_r($result3);

?>