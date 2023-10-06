<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang thông tin bác sỹ </title>
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="contrainer-fluid" style="background-color: silver;">
        <?php require_once APP_ROOT . '/app/view/layout/menu.php'; ?>
    </div>
    <div class="container">
        <h3 class="text-center text-success my-3">Thông tin bác sỹ</h3>
        <a href="" class="btn btn-success">Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bác sỹ</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Chuyên ngành</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($doctors as $doctor) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?= $doctor->getId(); ?>
                        </th>
                        <td>
                            <?= $doctor->getFullname(); ?>
                        </td>
                        <td>
                            <?= $doctor->getMajor(); ?>
                        </td>

                        <td>
                            <a class="color-primary" style="text-decoration: none;" href="">Sửa</i></a>
                        </td>
                        <td>
                            <a class=" color-primary" style="text-decoration: none;" href="?controller=doctor&action=process_delete&idSelect=<?php echo $doctor->getId(); ?>">Xóa</a>
                        </td>
                        
                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>

    </div>
    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>