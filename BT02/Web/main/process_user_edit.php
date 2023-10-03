<?php 
if(isset($_POST['sbmSave'])) {
    $id = $_POST['uid'];
    $user = $_POST['user'];
    $email = $_POST['mail'];
}
try {
    $conn = new PDO("mysql:host=localhost;dbname=users", "root", "");
    $sql_check = "SELECT * FROM nguoidung WHERE (fullname = '$user' OR email = '$email') AND id != '$id'";
    $stmt = $conn->prepare($sql_check);
    $stmt->execute();

    if ($stmt->rowCount() > 0 ) {
        header("Location:user_edit.php?information=existed");

    } else {
        $sql_update = "UPDATE nguoidung SET fullname = '$user' , email = '$email' WHERE id = '$id' ";
        $stmt = $conn->prepare($sql_update);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            header("Location:user_management.php?success=updated");
        }

    }

} catch (\Exception $e) {
    echo $e->getMessage();
}
?>
