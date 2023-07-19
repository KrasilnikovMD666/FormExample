<?php
require_once('connect.php');    

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $name = trim($_REQUEST['inputName']);
    $surname = trim($_REQUEST['inputSurname']);
    $email = trim($_REQUEST['inputEmail']);
    $text = $_REQUEST['inputText'];
    $file = $_REQUEST['inputFile'];
    $gender = $_REQUEST['gender'];
    echo 'Успешно!';

    $sql = "INSERT INTO forms (user_name, user_surname, user_email, user_text, user_file, user_gender)
            VALUES ('$name', '$surname', '$email', '$text', '$file', '$gender')";
    if(!mysqli_query($connect, $sql))
    {
        echo "Error!";
    }
    mail('AdminEmail@mail.ru', 'System alert', 'На сайте появилась новая форма обратной свзяи!');
}
?>