<?php
 $name = $_POST["fname"];
 $sname = $_POST["sname"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 require_once 'connect.php';


 if (strlen($name) < 4) {
    echo "Ну бля введи нормально имя хоть";
    exit;
 }
 if (strlen($sname) < 4) {
    echo "Ну бля введи нормально фамилию хоть";
    exit;
 }
 if (strlen($email) < 4 && str_contains($email,"@")) {
    echo "Ну бля введи нормально мэйл хоть";
    exit;
 }
 if (strlen($password) < 4) {
    echo "Ну бля введи нормально пароль хоть";
    exit;
 }

 $salt = 'afgutro@#$21';
 $password = md5($salt.$password);    
 mysqli_query($connect, "INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`) VALUES (NULL, '$name', '$sname', '$email', '$password')");
 header('Location: /');
?>