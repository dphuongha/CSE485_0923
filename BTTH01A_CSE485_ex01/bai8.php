<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];


$maxString = '';
$minString = '';


$maxLength = 0;
$minLength = PHP_INT_MAX; // Sử dụng giá trị tối đa của kiểu int làm giá trị ban đầu


foreach ($array as $string) {
    $length = strlen($string);


    if ($length > $maxLength) {
        $maxLength = $length;
        $maxString = $string;
    }


    if ($length < $minLength) {
        $minLength = $length;
        $minString = $string;
    }
}

echo "Chuỗi lớn nhất là $maxString, độ dài = $maxLength" . "<br>";
echo "Chuỗi nhỏ nhất là $minString, độ dài = $minLength";
?>
