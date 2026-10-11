<?php
$connect = mysqli_connect("localhost","root","root","php-website");
if (!$connect) {
    die("". mysqli_connect_error());
}
?>