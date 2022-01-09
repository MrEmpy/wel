<?php
session_start();
if (isset($_SESSION["username"])) {
    header("Location: dashboard");
}
?>

<!DOCTYPE html>
<html lang="pt">
    <body align="center">
        <meta charset="utf-8">
        <title>Web Exploration Laboratory - WEL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/prism-okaidia.css">
        <link rel="stylesheet" href="css/custom.min.css">

        <div class="container">
            <div class="col-lg-6" style="transform: translateX(320px);">
                <div class="well" style="transform: translateY(50px);">
                    <form class="form-horizontal" action="" method="POST">
                        <legend style="transform: translateX(210px);">Login</legend>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="username" placeholder="admin" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="password" placeholder="0123456" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary" style="transform: translateX(310px);">Submit</button>
                                </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
    </body>
</html>

<?php 
include "database.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    if (empty($username)) {
        echo '<br></br><p align="center">Campo de username vazio</p>';
        exit();

    } else if(empty($pass)){
        echo '<br></br><p align="center">Campo de senha vazio</p>';
        exit();

    } else {
        $pass_hash = md5($pass);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$pass_hash'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $pass_hash) {
                $_SESSION['username'] = $row['username'];
                header("Location: dashboard");
                exit();

            } else {
                echo '<br></br><p align="center">Username ou senha incorreto</p>';
                exit();
            }

        } else {
            echo '<br></br><p align="center">Username ou senha incorreto</p>';
            exit();

        }

    }

} else {
    exit();
}
?>