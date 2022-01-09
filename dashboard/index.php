<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: ..");
}
?>

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
        <h1 align="center">Web Exploration Laboratory</h1>

        <div class="form" align="center">
            <br></br>
            <button class="btn btn-primary col-lg-2" onclick="OpenRedirect();"><b>Open Redirect</b></button>
            <button class="btn btn-primary col-lg-2" onclick="XSS();"><b>XSS</b></button>
            <button class="btn btn-primary col-lg-2" onclick="CSRF();"><b>CSRF</b></button>
            <button class="btn btn-primary col-lg-2" onclick="LFI();"><b>LFI</b></button>
            <button class="btn btn-primary col-lg-2" onclick="IDOR();"><b>IDOR</b></button>
            <br></br>

            <button class="btn btn-primary col-lg-2" onclick="SQLI()"><b>SQL Injection</b></button>
            <button class="btn btn-primary col-lg-2" onclick="SSRF();"><b>SSRF</b></button>
            <button class="btn btn-primary col-lg-2" onclick="InfoDisclosure();"><b>Info Disclosure</b></button>
            <button class="btn btn-primary col-lg-2" onclick="RCE();"><b>RCE</b></button>
            <button class="btn btn-primary col-lg-2" onclick="FileUpload();"><b>File Upload</b></button>
        </div>
    </body>
</html>