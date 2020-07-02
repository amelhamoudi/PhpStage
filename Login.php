<?php
?>

<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/myStyle.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
</head>
<body>
<?php require_once("entete.php")?>
<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-heading"> Authentification </div>
        <div class="panel-body">
        <form action="Authentifier.php" method="Post">
            <div class="form-group">
                <label class="control-label"> Login : </label>
                <input type="text" name="username" class="form-control" >
            </div>
            <div class="form-group">
            <label class="control-label"> Password : </label>
                <input type="password" name="password"  class="form-control" >
            </div>
            <div>
                <button type="submit"> Login </button>
            </div>
        </form>
        </div>
    </div>
</div>
</body>
</html>
