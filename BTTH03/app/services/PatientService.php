<?php
require_once APP_ROOT . '/app/models/Patient.php';

class PatientService
{
    public function getAllPatients()
    {

        try {

            $conn = new PDO('mysql:host=localhost;dbname=phongmach', 'root', '');


            $sql = "SELECT * FROM patient";
            $stmt = $conn->query($sql);


            $patients = [];
            while ($row = $stmt->fetch()) {
                $patient = new Patient($row['idPatient'], $row['namePatient'], $row['dayexam'], $row['sick'], $row['id']);
                $patients[] = $patient;

            }
            return $patients;
        } catch (\Exception $e) {
            return $patients = [];

        }
    }

    public function deletePatient($idPatient) {
        $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "");
        
            //Buoc 2: Thuc hien truy van
        $sql = "DELETE FROM patient WHERE idPatient = '$idPatient'";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();

        //Buoc 3: Xử lý kết quả

        if ($result) {
            return true;
        } else {
            return false;
        }
        }
        public function addPatient($namePatient, $dayexam, $sick, $id)
    {
        try {
            //Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "");
          
            $sql_insert = "INSERT INTO patient( namePatient, dayexam, sick, id) 
            values ( '$namePatient', '$dayexam', '$sick', '$id');";
            $stmt = $conn->prepare($sql_insert);
            $result = $stmt->execute();
            if ($result) {
                return true;
            } else 
            {
                return false;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
    

?>