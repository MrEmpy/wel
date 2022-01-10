<!DOCTYPE html>
<html lang="pt">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/prism-okaidia.css">
    <link rel="stylesheet" href="../css/custom.min.css">

    <body class="container col-lg-8">
        <h1 align="center">Teste</h1>
        <br></br>
        <textarea rows="13" cols="104"><?php $file = $_GET["file"]; include($file);?></textarea>
    </body>
</html>