<?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root","");
    $sql_count1 = "SELECT * FROM theloai";
    $stmt = $conn->prepare($sql_count1);
    $stmt->execute();
    $tl = $stmt->rowCount();

    $sql_count2 = "SELECT * FROM tacgia";
    $stmt = $conn->prepare($sql_count2);
    $stmt->execute();
    $tg = $stmt->rowCount();

    $sql_count3 = "SELECT * FROM baiviet";
    $stmt = $conn->prepare($sql_count3);
    $stmt->execute();
    $bv = $stmt->rowCount();

} catch (\Exception $e) {
    echo $e->getMessage();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../NOTICE/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../NOTICE/fontawesome-free-6.4.0-web/css/all.min.css">
    <style>
        .box {
            width: 100%;
            height: 200%;
            background-color: whitesmoke;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include "menu.php";
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="box">
                    <h4 class="text-center">Người dùng</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <h4 class="text-center">Thể loại</h4>
                    <h2 class="text-center py-3"><?php echo $tl; ?></h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <h4 class="text-center">Tác giả</h4>
                    <h2 class="text-center py-3"><?php echo $tg; ?></h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box">
                    <h4 class="text-center">Bài viết</h4>
                    <h2 class="text-center py-3"><?php echo $bv; ?></h2>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>