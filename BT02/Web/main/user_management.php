<?php
try {
    //B1: Mo ket noi
    $conn = new PDO("mysql:host=localhost;dbname=users", "root", "");

    //B2: Thực hiện truy vấn
    $sql = "SELECT * FROM nguoidung ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //B3: XỬ LÝ KẾT QUẢ
    $users = $stmt->fetchAll();
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

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
        <div class="row">
            <?php include "sidebar.php"; ?>

            <div class="col-md-9">
                <?php include "header.php"; ?>
                <div class="main-content">
                    <h3 class="text-center text-uppercase">User Management</h3>
                    <a href="user_add.php" class="btn btn-success">Add a New User</a>
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
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Detail</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($users as $user) {
                            ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $user[0]; ?>
                                    </th>
                                    <td>
                                        <?php echo $user[1]; ?>
                                    </td>
                                    <td>
                                        <?php echo $user[2]; ?>
                                    </td>
                                    <td>
                                        <?php echo $user[3]; ?>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="./user_edit.php?id=<?php echo $user[0]; ?>">
                                            <i class="fa-solid fa-pencil"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#<?= $user[0]; ?>">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="<?= $user[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <a href="user_delete.php?id=<?= $user[0]; ?>" class="btn btn-success">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            <?php } ?>

                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>