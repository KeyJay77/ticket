<?php

if (isset($_GET['button_log']) || (!empty($_GET['email_txt'])) && (!empty($_GET['pass_txt'])))
{
    $email = $_GET['email_reg'];
    $password = $_GET['pass_reg'];
    $sql = new SQLite3("database.db");
    $query = "SELECT * FROM users WHERE email = $email AND pword = $password";
    if ($sql->exec($query)){
        header('');
    }else{
        
        $_SESSION['message'] = "Неправильный логин или пароль.";
        $_SESSION['email_reg'] = false;
    }
}
else if (isset($_GET['button_reg']))
{
    include 'adduser.php';
}