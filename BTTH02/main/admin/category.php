<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "");
    $sql = "SELECT * FROM theloai ORDER BY ma_tloai DESC LIMIT 5";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $tls = $stmt->fetchAll();
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
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "./menu.php"; ?>
        </div>
    </div>
    <div class="container">
        <button class="btn btn-success"><a href="./add_category.php" style="text-decoration: none; color:aliceblue">Thêm mới</a></button>
        <?php
        if (isset($_GET['success'])) {
            $id = $_GET['success'];
            echo "<h2 style='color:red'>{$_GET['success']}</h2>";
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên thể loại</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tls as $tl) { ?>
                    <tr>
                        <td><?php echo $tl[0] ?></td>
                        <td><?php echo $tl[1] ?></td>
                        <td><a href="./edit_category.php"><i class="fa-solid fa-pencil"></i></a></td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#<?= $tl[0]; ?>">
                            <i class="fa-solid fa-trash"></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="<?= $tl[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE User</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <a href="delete_category.php?id=<?= $tl[0]; ?>" class="btn btn-success">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php  } ?>

            </tbody>
        </table>
    </div>

    <script src="../NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>