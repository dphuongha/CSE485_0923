<?php 
$firstElement = reset($numbers); // Lấy phần tử đầu tiên
$lastElement = end($numbers); // Lấy phần tử cuối cùng

$maxValue = max($numbers);
$minValue = min($numbers);
$sum = array_sum($numbers);

asort($numbers);
arsort($numbers);
ksort($numbers);
krsort($numbers);
echo "Phần tử đầu tiên: $firstElement<br>";
echo "Phần tử cuối cùng: $lastElement<br>";
echo "Số lớn nhất: $maxValue<br>";
echo "Số nhỏ nhất: $minValue<br>";
echo "Tổng các giá trị: $sum<br>";

echo "Mảng sắp xếp theo chiều tăng các giá trị: ";
print_r($numbers);

echo "Mảng sắp xếp theo chiều giảm các giá trị: ";
print_r($numbers);

echo "Mảng sắp xếp theo chiều tăng các key: ";
print_r($numbers);

echo "Mảng sắp xếp theo chiều giảm các key: ";
print_r($numbers);

?>