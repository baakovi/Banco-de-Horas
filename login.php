<?php

    // require_once('connection.php');

    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        include_once('connection.php');
        $email = $_POST['email'];
        $senha = $_POST['password'];

        $sql = "SELECT * FROM funcionario WHERE email = '$email' and senha = '$senha'";
        
        $result = $connection->query($sql);
        

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: index.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $senha;
            $_SESSION['name'] = $name;
            $_SESSION['sucess'] = "Você está logado";
            header('Location: innitial_page.php');
        }
    }
    else
    {
        header('Location: index.php');
    }
?>