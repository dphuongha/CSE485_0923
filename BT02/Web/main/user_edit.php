<?php 
$user = [];
if(isset($_GET['id'])) {
    $uid = $_GET['id'];
    try{
        $conn = new PDO("mysql:host=localhost;dbname=users", "root", "");
        $sql_check = "SELECT * FROM nguoidung WHERE id = '$uid'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        if($stmt->rowCount()>0) {
            $user = $stmt->fetch();
        }
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
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
                <h3 class="text-center">EDIT USER</h3>
                <?php 
                if(isset($_GET["information"])) {
                    echo "<p style='background-color:orange'>{$_GET['information']}</p>";
                }
                ?>
               <form action="process_user_edit.php" method="post">
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            UserID
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="uid" id="" class="form-control bg-warning" value="<?= isset($user[0]) ? $user[0] : ''; ?>" readonly>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Username
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="user" id="" class="form-control " value="<?= isset($user[1]) ? $user[1] : ''; ?>" >
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Email
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="mail" id="" class="form-control" value="<?= isset($user[2]) ? $user[2] : ''; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success" name="sbmSave">UPDATE</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>