<?php 
$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3 (key 2)
unset($array[2]);

// Sắp xếp lại các key
$array = array_values($array);

// Hiển thị mảng sau khi xóa và sắp xếp lại key
print_r($array);

?>