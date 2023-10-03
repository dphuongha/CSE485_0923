<?php
if(isset($_POST['sbmSave'])){
    $user = $_POST['user'];
    $email = $_POST['mail'];
    $pass1 = $_POST['pass1'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=users", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM nguoidung WHERE fullname = '$user' OR email='$email'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        if($stmt->rowCount()>0){
            header("Location:user_add.php?error=existed");
        }else{
            $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
            $sql_insert = "INSERT INTO nguoidung (fullname, email, pass) VALUES ('$user', '$email', '$pass_hash')";
            $stmt = $conn->prepare($sql_insert);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                header("Location:user_management.php?success=added");
            }
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}