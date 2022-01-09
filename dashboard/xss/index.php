<!DOCTYPE html>
<html lang="pt">
    <body align="center">
        <meta charset="utf-8">
        <title>Web Exploration Laboratory - WEL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/prism-okaidia.css">
        <link rel="stylesheet" href="../../css/custom.min.css">

        <div class="container">
            <div class="col-lg-6" style="transform: translateX(320px);">
                <div class="well" style="transform: translateY(50px);">
                    <form class="form-horizontal" action="verify.php" method="POST">
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
echo '<br></br><p align="center">' . $_GET["error"] . '</p>';
?>