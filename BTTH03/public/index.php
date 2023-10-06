<?php 
require_once('../app/config/config.php');
// require_once APP_ROOT.'/app/controllers/PatientController.php';

// $patientService = new PatientService();
// $a = $patientService->getAllPatients();
// echo '<pre>';
// print_r($a);
// echo '</pre>';


// $courseService = new CourseService();
// $a = $courseService->getAllCourses();

// $doctorService = new DoctorService();
// $a = $doctorService->getAllDoctors();

// echo '<pre>';
// print_r($a);
// echo '</pre>';

$controller = isset($_GET['controller'])?$_GET['controller']:'patient';
$action     = isset($_GET['action'])?$_GET['action']:'index';

$controller = ucfirst($controller);
$controller = $controller."Controller";

$path = APP_ROOT.'/app/controllers/'.$controller.'.php';

if(!file_exists($path)){
    die("Request not found. Check your path");
}

include $path;

$myController = new $controller();

if (method_exists($myController, $action)) {
    $myController->$action();
} else {
    echo "$action does not exist in $controller class";
}
?>


