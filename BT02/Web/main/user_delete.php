<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
try {
    $conn = new PDO("mysql:host=localhost;dbname=users", "root", "");
    $sql_delete = "DELETE FROM nguoidung WHERE id = '$id'";	
    $stmt = $conn->prepare($sql_delete);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        header("Location:user_management.php?success=$id");
    }


} catch (\Exception $e) {
    echo $e->getMessage();
}
?>