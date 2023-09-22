<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
        
        $arrs = [2,5,6,9,2,5,6,12,5];

        //Tính tổng các phần tử
        $sum = array_sum($arrs);
        echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "<br>";

        //Tính tích các phần tử
        $tich = array_product($arrs);
        echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich . "<br>";

        //Tính hiệu các phần tử 
        $hieu = $arrs[0];
        foreach ($arrs as $value) {
            $hieu -= $value;
        }

        echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $hieu. "<br>";

        //Tính thương các phần tử
        $thuong = $arrs[0];

        foreach ($arrs as $value) {
            if ($value != 0) {
                $thuong /= $value;
            } else {
                echo "Không thể chia cho 0.";
                return;
            }
        }

        echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $thuong . "<br>";



        ?>

    </div>
    
</body>
</html>