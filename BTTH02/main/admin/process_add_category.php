<?php 
if(isset($_POST['add'])) {
    $tl = $_POST['tentl'];
}
try {
    //Buoc 1: Ket noi DBServer
    $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root","");
    //Buoc 2: Thuc hien truy van
    $sql_check = "SELECT * FROM theloai WHERE ten_tloai = '$tl' ";
    $stmt = $conn->prepare($sql_check);
    $stmt->execute();

    //Buoc 3: Xử lý kết quả
    if($stmt->rowCount()>0){
        header("Location:add_category.php?error=existed");
    }else{
        $sql_insert = "INSERT INTO theloai (ten_tloai) VALUES ('$tl')";
        $stmt = $conn->prepare($sql_insert);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            header("Location:category.php?success=added");
        }
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>