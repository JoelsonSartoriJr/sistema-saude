<?php
session_start();

require_once('../utils/Utils.php');
require_once('../login/conexao.php');

try {
  $doctor_id = $_SESSION['user'][0];
  $patient = $_POST['patient'];
  $doctor = $_POST['doctor'];
  $hour = $_POST['hour'];
  $date = $_POST['date'];
  $type_exam = $_POST['type_exam'];
  $obs = $_POST['obs'];
  $others = $_POST['others'];
  $symptoms = $_POST['symptoms'];
  $recipe = $_POST['recipe'];


  $query_patient = $conn->query("SELECT * FROM users WHERE name= '$patient' ");
  $patient_id = $query_patient->fetchAll();
  $patient_id = $patient_id[0][0];

  $queryUser = $conn->prepare("INSERT INTO consultation (id_doctor, id_patient, doctor, hour, date, obs, others, symptoms, recipe) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
  $queryUser->execute(array($doctor_id, $patient_id, $doctor, $hour, $date, $obs, $others, $symptoms, $recipe));

  $_SESSION['erro'] = "Consulta cadastrado com sucesso!";
  header("Location: http://localhost:8000/views/medico/medico.php");
} catch (Throwable $e) {
  console_log('Throwable' . $e);
  header("Location: http://localhost:8000");
} catch (Exception $e) {
  header("Location: http://localhost:8000");
}
