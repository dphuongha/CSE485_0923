<?php 
require_once APP_ROOT . '/app/services/PatientService.php';

class PatientController {
    public function index(){  // hiển thị dữ liệu từ cơ sở dữ liệu và chuyển nó đến view tương ứng.
       
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients(); 

        include APP_ROOT . '/app/view/Patient/indexPatient.php';

    }

    public function process_delete()
    {
        $idPatient = isset($_GET['idSelect']) ? $_GET['idSelect'] : null;

        $patientService = new PatientService();
        $check = $patientService->deletePatient($idPatient);
        if ($check == true) {
            $this->index();
        } else {
            echo "Không tồn tại";
        }

        // $this->index();
    }
    public function add_patient()
    {
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
        include APP_ROOT . '/app/view/Patient/add.php';
    }

    public function process_add()
    {

        $_POST['sbmSave'];

        $namePatient = $_POST['namePatient'];
        $dayexam = $_POST['dayexam'];
        $sick = $_POST['sick'];
        $id = $_POST['id'];

        $patientService = new PatientService();
        $check = $patientService->addPatient($namePatient, $dayexam, $sick, $id);

        if ($check) {
            $this->index();
        } else {
            $this->add_patient();
        }


    }


}
?>