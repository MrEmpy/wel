<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/prism-okaidia.css">
    <link rel="stylesheet" href="../css/custom.min.css">
<?php
$url = $_GET["url"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
?>
    <body align="center" class="container col-lg-8">
        <h1 align="center">Baixar código fonte</h1>
        <textarea rows="15" cols="100"><?php curl_exec($ch);?></textarea>
        <p align="center"><a>Use o parâmetro GET chamado "url" e coloque a URL no valor. Exemplo: http://localhost/dashboard/ssrf.php?url=https://www.google.com/</a></p>
    </body>
<?php
curl_close($ch);
?>
</html>
