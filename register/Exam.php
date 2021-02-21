<?php

session_start();


require_once '../utils/Utils.php';
require_once '../model/Exam.php';

try {

    $method = $_SERVER['REQUEST_METHOD'];
    
  if (file_exists('../date/date.xml')){
    $xml = simplexml_load_file('../date/date.xml')  or die ("Failed to load");
    if($method == 'POST'){
        $exams = $xml->exams->addChild('exam');

        $id = md5(uniqid(""));
        $lab = $_POST['lab'];
        $lab_id = $_SESSION['user'];

        $patient = $_POST['patient'];
        $patient_id = $xml->xpath("//user[name = '$patient']");
        $patient_id = $patient_id[0]->id;

        $doctor = $_POST['doctor'];
        $hour = $_POST['hour'];
        $date = $_POST['date'];
        $obs = $_POST['obs'];
        $others = $_POST['others'];
        $type_exam = $_POST['type_exam'];
        $result = $_POST['result'];

        $exam = new Exam($id, $lab_id, $lab, $patient, $patient_id, $doctor, $hour, $date, $obs, $others, $type_exam, $result);
        foreach ($exam as $key => $value){
            $exams->addChild($key, $value);
        }
        $xml->asXML('../date/date.xml');
        $_SESSION['erro'] = "Exame cadastrado com sucesso!";
    }
  } else {
    $_SESSION['erro'] = "Erro ao conectar ao banco!";
  }
  header("Location: http://localhost:8000/views/laboratorio/laboratorio.php");

} catch (Throwable $e) {
    console_log('Throwable'.$e);
    header("Location: http://localhost:8000");
} catch (Exception $e) {
    console_log('Exception'.$e);
    header("Location: http://localhost:8000");
}