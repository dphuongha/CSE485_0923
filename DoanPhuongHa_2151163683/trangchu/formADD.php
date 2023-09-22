<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./NOTICE/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./NOTICE/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="./user.css">
    <?php 
    $link = new mysqli('localhost', 'root', '','users') or die("Kết nối thất bại");
    mysqli_query($link, 'SET NAMES UTF8'); 
    ?>
    <style>
        .them a {
            color: white;
            text-decoration: none;
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
                <div class="row">
                    <h4 class="bg-warning"><center>Enter Information</center></h4>
                    <form action="./users.php" method="POST">
                        <label class="form-label" for="id">ID</label>
                        <input class="form-control" type="text" name="id" placeholder="Vui lòng nhập số"> 
                        <label class="form-label" for="fullName">Fullname</label>
                        <input class="form-control" type="text" name="fullName" placeholder="Vui lòng nhập tên"> 
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="ha21@gmail.com"> 
                        <label class="form-label" for="gender">Gender</label>
                        <input class="form-control" type="" name="gender" placeholder="Kinh"> 
                        <label class="form-label" for="group">Group</label>
                        <input class="form-control" type="text" name="group" placeholder="a"> 
                        <label class="form-label" for="mobile">Mobile</label>
                        <input class="form-control" type="text" name="mobile" placeholder="0982688033"> 
                        <label class="form-label" for="date">Date Of Birth</label>
                        <input class="form-control" type="date" name="birth" > 
                        <label class="form-label" for="pass">Password</label>
                        <input class="form-control" type="text" name="pass" placeholder="Vui lòng nhập số"> 
                        <label class="form-label" for="created">Created_at</label>
                        <input class="form-control" type="text" name="created" placeholder="2023-09-19 13:29:58">  <br>
                        <input type="submit" class="btn " value="ADD" name="insert">
                        <?php 
                        //if(isset($_POST['insert'])) {
                            //$id = $_POST['id'];
                            //$name = $_POST['fullName'];
                            //$email =  $_POST['email'];
                            //$gender = $_POST['gender'];
                            //$group =$_POST['group'];
                            //$mobile = $_POST['mobile'];
                            //$birth =$_POST['birth'];
                            //$pass = $_POST['pass'];
                            //$created = $_POST['created'];
                            //$query = "INSERT INTO information VALUES('$id','$name','$email','$gender','$group','$mobile','$birth','$pass','$created')";
                            //mysqli_query($link, $query) or die ("Thêm dữ liệu thất bại!");
                        //}
                        

                        ?>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>