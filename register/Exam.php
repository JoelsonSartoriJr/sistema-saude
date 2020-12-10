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
        $patient = $_POST['patient'];
        $doctor = $_POST['doctor'];
        $hour = $_POST['hour'];
        $date = $_POST['date'];
        $obs = $_POST['obs'];
        $others = $_POST['others'];
        $type_exam = $_POST['type_exam'];
        $result = $_POST['result'];

        $exam = new Exam($id, $lab, $patient, $doctor, $hour, $date, $obs, $others, $type_exam, $result);
        foreach ($exam as $key => $value){
            $exams->addChild($key, $value);
        }
        $xml->asXML('../date/date.xml');
        console_log("O Exame foi adicionado com sucesso no banco de dados");
    }
  } else {
      console_log('Erro ao conectar ao bando de dados.....');
  }
  header("Location: http://localhost:8080/views/admin/admin.php");

} catch (Throwable $e) {
    console_log('Throwable'.$e);
    header("Location: http://localhost:8080");
} catch (Exception $e) {
    console_log('Exception'.$e);
    header("Location: http://localhost:8080");
}