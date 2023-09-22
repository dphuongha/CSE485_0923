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
                <div class="row box1">
                    <div>
                        <h3 class="text-center">USERS</h3>
                    </div>
                    <div>
                        <div>
                            <h4>Filter</h4>
                        </div>
                        <div>
                            <div class="a d-flex">
                                <div class="username input-group mb-3">
                                    <input type="text" class=" form-control" placeholder="Username" >
                                </div>
                                <div class="input-group mb-3 mobile ">
                                    <input type="text" class=" form-control" placeholder="Mobile" >
                                </div>
                                <select class="select form-select" aria-label="Default select example">
                                    <option selected>Select Group</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <button class="filter btn btn-primary bg-warning" type="submit"><i class="fa-solid fa-magnifying-glass"></i>Filter</button>
                                <button class="clear btn btn-primary bg-warning" type="submit">Clear</button>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row box2">
                    <div>
                        <h4>Users</h4>
                    </div>
                    <div class="end">
                        <button class="delete btn btn-primary bg-warning" type="submit">Delete</button>
                        <button class="add btn btn-primary bg-warning" type="submit"><a href="./formADD.php" target="_blank" >ADD USER +</a></button>
                    </div>
                </div>
                <div class="row">
                    <table width="100%" >
                        <thead>
                            <tr>
                                <th width="5%" scope="col">ID</th>
                                <th width="15%"  scope="col" >Fullname</th>
                                <th width="10%"  scope="col">Email</th>
                                <th width="10%"  scope="col">Gender</th>
                                <th width="8%"  scope="col">Group</th>
                                <th width="12%"  scope="col">Mobile</th>
                                <th width="15%"  scope="col">Date Of Birth</th>
                                <th width="10%"  scope="col">Password</th>
                                <th width="10%"  scope="col">Cteated_at</th>
                                <th width="10%"  scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM information";
                            $result = mysqli_query($link, $query); 
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['ID'];
                                    $name = $row['fullName'];
                                    $email = $row['email']; 
                                    $gender = $row['gender']; 
                                    $group = $row['gr'];
                                    $mobile = $row['mobile']; 
                                    $birth = $row['birth'];
                                    $pass = $row['pass'];
                                    $created = $row['created'];
                                    echo "<tr>";
                                    echo "<td>$id</td>";
                                    echo "<td>$name</td>";
                                    echo "<td>$email</td>";
                                    echo "<td>$gender</td>";
                                    echo "<td>$group</td>";
                                    echo "<td>$mobile</td>";
                                    echo "<td>$birth</td>";
                                    echo "<td>$pass</td>";
                                    echo "<td>$created</td>";
                                    echo "<td> <a href='./delete.php?id=$id'><i class='fa-solid fa-trash'></i></a>
                                    <a href='./update.php?id=<?php echo $id?>'><i class='fa-solid fa-pen'></i></a></td>";
                                    echo "</tr>";
                                    
        

                                }
                            }
                            ?>
                            
                            
                        
                            
                        </tbody>
                    </table>
                    
                    <?php 
                    if(isset($_POST['insert'])) {
                        $id = $_POST['id']; 
                        $name = $_POST['fullName'];
                        $email =  $_POST['email'];
                        $gender = $_POST['gender'];
                        $group =$_POST['group'];
                        $mobile = $_POST['mobile'];
                        $birth =$_POST['birth'];
                        $pass = $_POST['pass'];
                        $created = $_POST['created'];
                        $query = "INSERT INTO information VALUES('$id','$name','$email','$gender','$group','$mobile','$birth','$pass','$created')";
                        mysqli_query($link, $query) or die ("Thêm dữ liệu thất bại!");
                        header("location: users.php");
                    
                    }
                    if(isset($_POST['update'])) {
                        $id = $_GET['id']; // //Khi bạn gửi yêu cầu đến trang update.php từ trang users.php, bạn cần đảm bảo rằng tham số id đã được chuyển đi bằng phương thức GET. Vì vậy, trong trang users.php, cần chắc chắn rằng bạn đang gửi tham số id khi nhấn vào liên kết "Edit" (sửa).
                        //Trong thẻ <a> trong trang users.php, thêm ?id=<?php echo $id; vào href để chuyển tham số id khi nhấp vào liên kết "Edit".
                        $name = $_POST['fullName'];
                        $email =  $_POST['email'];
                        $gender = $_POST['gender'];
                        $group =$_POST['group'];
                        $mobile = $_POST['mobile'];
                        $birth =$_POST['birth'];
                        $pass = $_POST['pass'];
                        $query = "UPDATE information SET fullName='$name', email='$email', gender='$gender', gr='$group', mobile='$mobile', birth='$birth', pass='$pass' WHERE ID = $id";
                        header("location: http://localhost/hocPHP/KetNoiCSDL_CauHinhWebCSDL/database/users.php");
                  
                    }
 
                    ?>
                    
                    
                </div>
                <div class="row box3">
                    
                </div>
            </div>
        </div>
    </div>
    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>