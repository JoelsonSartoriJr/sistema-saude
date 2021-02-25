<?php

session_start();


require_once('../utils/Utils.php');
require_once('../login/conexao.php');

try {
    $lab_id = $_SESSION['user'][0];
    $lab = $_SESSION['user'][1];
    $patient = $_POST['patient'];
    $doctor = $_POST['doctor'];
    $hour = $_POST['hour'];
    $date = $_POST['date'];
    $type_exam = $_POST['type_exam'];
    $obs = $_POST['obs'];
    $others = $_POST['others'];
    $result = $_POST['result'];

    $queryUser = $conn->prepare("INSERT INTO exam (id_lab, lab, patient, doctor, hour, date, obs, others, type_exam, result) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $queryUser->execute(array($lab_id, $lab, $patient, $doctor, $hour, $date, $obs, $others, $type_exam, $result));

    $_SESSION['erro'] = "Exame cadastrado com sucesso!";
    header("Location: http://localhost:8000/views/laboratorio/laboratorio.php");

} catch (Throwable $e) {
    console_log('Throwable' . $e);
    header("Location: http://localhost:8000");
} catch (Exception $e) {
    console_log('Exception' . $e);
    header("Location: http://localhost:8000");
}
