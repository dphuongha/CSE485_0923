<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    try{
       
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "");

        $sql_baiviet = "DELETE FROM baiviet WHERE ma_tloai = '$id'";
        $stmt = $conn->prepare($sql_baiviet);
        $stmt->execute();

        
        $sql = "DELETE FROM theloai WHERE ma_tloai = '$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        
        $rowCount = $stmt->rowCount();
        if($rowCount>0){
            header("Location:category.php?success=$id");
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }

?>