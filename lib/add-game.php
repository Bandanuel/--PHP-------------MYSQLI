<?php
require_once "connect.php";
$image = $_POST["image"];
$followers = $_POST["followers"];

if (strlen($image) < 3) {
    echo "Ну бля введи нормально картинки хоть";
    exit;
 }
 if (strlen($followers) < 1) {
    echo "Ну бля введи нормально фолловеров хоть";
    exit;
 }
  mysqli_query($connect, "INSERT INTO `trends` (`id`, `image`, `followers`) VALUES (NULL, '$image', '$followers')");
  header('Location: ../trending.php');
?>
