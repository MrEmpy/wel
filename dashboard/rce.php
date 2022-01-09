<!DOCTYPE html>
<html lang="pt">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/prism-okaidia.css">
    <link rel="stylesheet" href="../css/custom.min.css">

    <body class="container col-lg-8">
        <h1 align="center">Consultar Domínio</h1>
        <br></br>
        <form action="" method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="domain" placeholder="Domínio">
            <button class="btn btn-primary" type="submit" id="button-addon2">Consultar</button>
        </div>
            <textarea rows="13" cols="104"><?php $domain = $_POST["domain"]; if (isset($domain)) {system("dig " . $domain);}?></textarea>
        </form>
    </body>
</html>