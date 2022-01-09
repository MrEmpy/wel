<!DOCTYPE html>
<html lang="pt">
    <body align="center" class="container col-lg-8">
        <meta charset="utf-8">
        <title>Web Exploration Laboratory - WEL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/prism-okaidia.css">
        <link rel="stylesheet" href="../css/custom.min.css">
        <script src="../js/dashboard.js"></script>
        <h1 align="center">File Upload</h1>

        <div class="form">
            <br></br>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="fileupload" style="transform: translateX(250px);" class="btn btn-default">
                <input type="submit" value="Upload" name="submit" class="btn btn-default" style="transform: translateY(40px) translateX(30px);">
            </form>
        </div>
    </body>
</html>

<?php
   if(isset($_FILES["fileupload"])) {
    $file_name = $_FILES["fileupload"]["name"];
    $dir = "uploads/";

    if ($_FILES["fileupload"]["type"] === "image/jpeg") {
        move_uploaded_file($_FILES["fileupload"]["tmp_name"], $dir . $file_name);
        echo '<p style="transform: translateY(40px) translateX(240px);">Imagem enviada para a pasta uploads com sucesso!</p>';
    } else {
      echo '<p style="transform: translateY(40px) translateX(240px);">Apenas imagens jpeg são aceitas para serem enviadas.</p>';
    }
}
?>