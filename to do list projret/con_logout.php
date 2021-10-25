<?php
    session_start();
    echo"<br>Before : ";
    var_dump($_SESSION);

    session_unset();
    echo"<br>After : ";
    var_dump($_SESSION);

    header('Location: index.php');
    exit();
?>