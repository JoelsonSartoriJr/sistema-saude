<?php

function clean($string)
{
    $string = trim($string);
    $string = stripslashes($string);

    return $string;
}

function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}


function alerta() {
    echo "<script type='text/javascript'>alert(Usuario já existe);</script>";
}