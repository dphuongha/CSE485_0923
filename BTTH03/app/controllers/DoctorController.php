<?php 
require_once APP_ROOT . '/app/services/DoctorService.php';

class DoctorController {
    public function index(){  // hiển thị dữ liệu từ cơ sở dữ liệu và chuyển nó đến view tương ứng.
       
        $doctorService = new DoctorService();
        $doctors = $doctorService->getAllDoctors(); 

        include APP_ROOT . '/app/view/Doctor/indexDoctor.php';

    }
    public function process_delete()
    {
        $id = isset($_GET['idSelect']) ? $_GET['idSelect'] : null;

        $doctorService = new DoctorService();
        $check = $doctorService->deleteDoctor($id);
        if ($check == true) {
            $this->index();
        } else {
            echo "Không tồn tại";
        }

        // $this->index();
    }

}
?>