<?php

session_start();


require_once '../utils/Utils.php';
require_once '../model/Exam.php';

try {
  
} catch (Throwable $e) {
    console_log('Throwable'.$e);
    header("Location: http://localhost:8000");
} catch (Exception $e) {
    console_log('Exception'.$e);
    header("Location: http://localhost:8000");
}