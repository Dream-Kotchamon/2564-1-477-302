<?php
    session_start();

    if(isset($_POST['doLogin']))
    {
        $username = $_POST['username'];
        $username = $_POST['password'];

        if($username == "admin" && $password == "12345")
        {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            header('Location: home.php');
            exit();
        }
        else
        {
            header('Location: index.php?login=false');
            exit();
        }
    }
?>