<?php

session_start();


require_once '../utils/Utils.php';
require_once '../model/Consultation.php';

try {

    $method = $_SERVER['REQUEST_METHOD'];
    
  if (file_exists('../date/date.xml')){
    $xml = simplexml_load_file('../date/date.xml')  or die ("Failed to load");
    if($method == 'POST'){
        $exams = $xml->consultions->addChild('consultion');

        $id = md5(uniqid(""));
        $patient = $_POST['patient'];
        $patient_id = $xml->xpath("//user[name = '$patient']");
        $patient_id = $patient_id[0]->id;

        $doctor = $_POST['doctor'];
        $doctor_id = $xml->xpath("//user[name = '$doctor']");
        $doctor_id = $doctor_id[0]->id;

        $hour = $_POST['hour'];
        $date = $_POST['date'];
        $obs = $_POST['obs'];
        $others = $_POST['others'];
        $symptoms = $_POST['symptoms'];
        $recipe = $_POST['recipe'];

        $exam = new Consultation($id,$patient,$patient_id, $doctor_id, $doctor, $hour, $date, $obs, $others, $symptoms, $recipe);
        foreach ($exam as $key => $value){
            $exams->addChild($key, $value);
        }
        $xml->asXML('../date/date.xml');
        console_log("A consulta foi adicionado com sucesso no banco de dados");
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