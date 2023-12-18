<?php


$firstname = $_GET['name_reg'];
$lastname = $_GET['lastname_reg'];
$email = $_GET['email_reg'];
$password = $_GET['pass_reg'];

$sql = new SQLite3("database.db");
$query = "INSERT INTO users ('userid','firstname','lastname','pword','email') 
VALUES (NULL, '".$firstname."','".$lastname."', '".$password."', '".$email."')";
if ($sql->exec($query) == true)
{
    echo "<p> Вы зарегистрированы! </p>";
    echo "<a href ='index.php'>Вернутся на главную страницу</a>";
    $sql->close();
}else{
    echo "<p> Ошибка в регистрации! </p>";
    echo "<br>".$sql->lastErrorMsg()."</br>";
    echo "<a href ='index.php'>Вернутся на главную страницу</a>";
    $sql->close();
}