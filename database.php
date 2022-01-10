<?php
$name= "localhost";
$username= "<YOUR USERNAME>";
$password = "<YOUR PASSWORD>";
$db_name = "wel";
$conn = mysqli_connect($name, $username, $password, $db_name);

if (!$conn) {
    echo '<br></br><p align="center">Conexão falhou</p>';
}
?>
