<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = [
        'a' => [
            'b' => 0,
            'c' => 1
        ],
        'b' => [
            'e' => 2,
            'o' => [
                'b' => 3
            ]
        ]
    ];

    $b = $a['b']['o']['b'];
    echo "Giá trị có key b = " . $b; 
    echo "<br>";

    $c = $a['a']['c'];
    echo "Giá trị có key c = " . $c; 
    echo "<br>";

    
    $infor_A = $a['a'];

    ?>
    <h3>Thông tin của phần tử có key 'a':</h3>
    <pre>
        <?php print_r($infor_A); ?>
    </pre>


</body>

</html>