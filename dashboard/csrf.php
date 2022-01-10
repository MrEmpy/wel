<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ../");
}
?>
<!DOCTYPE html>
<html lang="pt">
    <body align="center">
        <meta charset="utf-8">
        <title>Web Exploration Laboratory - WEL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/prism-okaidia.css">
        <link rel="stylesheet" href="../css/custom.min.css">

        <div class="container">
            <div class="col-lg-6" style="transform: translateX(320px);">
                <div class="well" style="transform: translateY(50px);">
                    <form class="form-horizontal" action="" method="POST">
                        <legend style="transform: translateX(160px);">Resetar senha</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nova senha</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="newpassword" placeholder="*********" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Confirmar</label>
                            <div class="col-lg-10">
                                <input class="form-control" name="confirmpassword" placeholder="*********" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Cancelar</button>
                                <button type="submit" class="btn btn-primary" style="transform: translateX(300px);">Enviar</button>
                                </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
    </body>
</html>

<?php 
include "../database.php";

if (isset($_POST['newpassword']) && isset($_POST['confirmpassword'])) {
    $new_password = $_POST['newpassword'];
    $confirm_password = $_POST['confirmpassword'];

    if (empty($new_password)) {
        echo '<br></br><p align="center">Campo de nova senha vazio</p>';
        exit();

    } else if(empty($confirm_password)){
        echo '<br></br><p align="center">Campo de confirmar senha vazio</p>';
        exit();

    } else {
        if ($new_password === $confirm_password) {
            $sessao_username = $_SESSION["username"];
            $pass_hash = md5($new_password);
            $query_users = "SELECT * FROM users WHERE username='$sessao_username'";
            $result = mysqli_query($conn, $query_users);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                $query_change_password = "UPDATE users SET password='$pass_hash' WHERE username='$sessao_username'";
                mysqli_query($conn, $query_change_password);
                echo '<br></br><p align="center">Senha atualizada com sucesso!</p>';

            } else {
                echo '<br></br><p align="center">Username ou senha incorreto</p>';
                exit();

            }
        } else {
            echo '<br></br><p align="center">As senhas não são as mesmas</p>';
        }
    }

} else {
    exit();
}
?>