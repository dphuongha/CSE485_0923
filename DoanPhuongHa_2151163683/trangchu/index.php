<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./NOTICE/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./NOTICE/fontawesome-free-6.4.0-web/css/all.min.css">
    <style>
        .icon {
            color: orangered;
        }
        .icon {
            margin-right: 30px;
            margin-left: 15px;
            margin-bottom: 10px;
        }
        .mol {
            color: orangered;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 10px;
            font-weight: bolder;
            margin-left: 8px;
            margin-right: 10px;
        }
        .header {
            justify-content: space-between;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php 
            include "chung.php";
            ?>
            <div class="col-md-9">
                <?php 
                include "chung2.php";
                ?>
                <h3>TRANG CHỦ</h3>
            </div>
        </div>
    </div>
    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>