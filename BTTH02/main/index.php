<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./NOTICE/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./NOTICE/fontawesome-free-6.4.0-web/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <?php 
        include "./header.php";
        ?>
        <div class="row">
            <div>
                <img src="./img/trangchu.png" alt="">
            </div>
        </div>
        <div class="row py-2">
            <div>
                <h3><center>TOP BÀI HÁT YÊU THÍCH</center></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="./img/la&gio.jpg" width="100%" alt="">
                <center class="py-3"><a style="text-decoration: none;" href="./detail.php">Cây, lá và gió</a></center>

            </div>
            <div class="col-3">
                <img src="./img/oi.jpg" width="100%" alt="">
                <center class="py-3"><a style="text-decoration: none;" href="">Cuộc sống mến thương</a></center>
            </div>
            <div class="col-3">
                <img src="./img/longme.jpg" width="100%" alt="">
                <center class="py-3"><a style="text-decoration: none;" href="">Lòng mẹ</a></center>
            </div>
            <div class="col-3">
                <img src="./img/phoipha.jpg" width="100%" alt="">
                <center class="py-3"><a style="text-decoration: none;" href="">Phôi pha</a></center>
            </div>
            <div class="col-3">
                <img src="./img/noitinhyeu.jpg" width="100%" alt="">
                <center class="py-3"><a style="text-decoration: none;" href="">Nơi tình yêu bắt đầu</a></center>
            </div>
        </div>
        <?php include "./footer.php"; ?>
        

    </div>

    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>