<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../NOTICE/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../NOTICE/fontawesome-free-6.4.0-web/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "menu.php" ?>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center py-3">THÊM MỚI THỂ LOẠI</h3>
        <?php
        if (isset($_GET['error'])) {
            echo "<p style='background-color:orange'>{$_GET['error']}</p>";
        }
        ?>
        <form action="process_add_category.php" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
                <input type="text" class="form-control" name="tentl">
            </div>
            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <button class="btn btn-success" type="submit" name="add">Thêm mới</button>
                <button class="btn" type="submit"><a href="./category.php" style="text-decoration: none; color:black;">Quay lại</a></button>
            </div>
        </div>
        </form>

    </div>

    <script src="../NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>