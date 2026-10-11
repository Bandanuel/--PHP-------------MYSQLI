<?php
require_once "connect.php";
$email = $_POST["email"];
$password = $_POST["password"];

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

 $sql = mysqli_query($connect, "SELECT id FROM user WHERE email = '$email' AND password = '$password'");
 $sqlname = mysqli_query($connect, "SELECT name FROM user WHERE email = '$email' AND password = '$password'");
 if (mysqli_num_rows($sql) == 0) {
    echo "Такого пользователя нет";
 } else { 
    $user = mysqli_fetch_assoc($sqlname);
    $name = $user['name'];
    setcookie('email', $name, time() + 3600 * 24 * 30,'/');
    header("Location: /user.php");
 }
?>