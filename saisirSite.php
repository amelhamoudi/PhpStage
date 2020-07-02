
<?php
require_once("security.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/myStyle.css">
</head>
<body>
<?php require_once("entete.php")?>
<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
    <div class="panel-heading"> Saisir un Site
        <div class="panel-body">

            <form action="enregistrerSite.php" method="Post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label" > TYPE</label>
                    <input type="text" name="type" class="form-control" >
                </div>
                <div class="form-group">
                    <label class="control-label" > URL</label>
                    <input type="text" name="url" class="form-control" >
                </div>
                <div class="form-group">
                    <label class="control-label" > PHOTO</label>
                    <input type="file" name="photo" class="form-control" >
                </div>
                <div> <button type="submit"> Enregister </button> </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>