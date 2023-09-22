<?php 
$link = new mysqli('localhost', 'root', '','users') or die("Kết nối thất bại");
mysqli_query($link, 'SET NAMES UTF8'); 
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM information WHERE id = '$id'";
    $result = mysqli_query($link, $query) or die ("Delete thất bại!");
    header("Location: users.php");

}

?>