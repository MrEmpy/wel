<!DOCTYPE html>
<html lang="pt">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/prism-okaidia.css">
    <link rel="stylesheet" href="../css/custom.min.css">

    <body class="container col-lg-8">
        <h1 align="center">Informações do usuário</h1>
        <br></br>
        <form action="" method="POST">
            <textarea rows="13" cols="104">
<?php
include "../database.php";

if (isset($_POST["id"])) {
    if ($_POST["id"] === "1") {
        $query = "SELECT * FROM users WHERE username='admin'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            echo "ID: 1";
            echo "\nUsername: " . $row["username"];
            echo "\nPassword: " . $row["password"];
        }
    } elseif ($_POST["id"] === "53") {
        $query = "SELECT * FROM users WHERE username='jhon'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            echo "ID: 53";
            echo "\nUsername: " . $row["username"];
            echo "\nPassword: " . $row["password"];
        }
    }
}
?>
</textarea>
            <div class="input-group mb-3">
                <input type="text" hidden value="1" name="id">
                <button class="btn btn-primary" type="submit" id="button-addon2">Consultar</button>
            </div>
        </form>
    </body>
</html>

