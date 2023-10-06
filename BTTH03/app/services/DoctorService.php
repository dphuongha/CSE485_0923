<?php
require_once APP_ROOT . '/app/models/Doctor.php';

class DoctorService
{
    public function getAllDoctors()
    {

        try {

            $conn = new PDO('mysql:host=localhost;dbname=phongmach', 'root', '');


            $sql = "SELECT * FROM doctor";
            $stmt = $conn->query($sql);


            $doctors = [];
            while ($row = $stmt->fetch()) {
                $doctor = new Doctor($row['id'], $row['fullname'], $row['major']);
                $doctors[] = $doctor;

            }
            return $doctors;
        } catch (\Exception $e) {
            return $doctors = [];

        }
    }
    public function deleteDoctor($id)
    {
        $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "");

        //Buoc 2: Thuc hien truy van
        $sql = "DELETE FROM doctor WHERE id = '$id'";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();

        //Buoc 3: Xử lý kết quả

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>