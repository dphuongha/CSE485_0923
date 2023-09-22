<?php 
function convertToLowerCase($arr) {
    $result = array_map('strtolower', $arr);
    return $result;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$result1 = convertToLowerCase($arr1);
$result2 = convertToLowerCase($arr2);
$result3 = convertToLowerCase($arr3);

echo "Mảng 1 sau khi chuyển là: ";
print_r($result1);

echo "<br>";

echo "Mảng 2 sau khi chuyển là: ";
print_r($result2);

echo "<br>";

echo "Mảng 3 sau khi chuyển là: ";
print_r($result3);

?>