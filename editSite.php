<?php
require_once("conn.php");
$code=$_GET['code'];
$ps=$pdo->prepare("SELECT * FROM web WHERE CODE=?");
$params=array($code);
$ps->execute($params);
$site=$ps->fetch();
?>

<html>
<head>
    <meta charset="UTF-8"/>
</head>
<body>
<?php require_once("entete.php")?>
    <div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"> saisir un site </div>
            <div class="panel-body"> </div>
            <form action="modifierSite.php" method="Post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label"> CODE : </label>
                    <input type="text" name="type" value="<?php echo($site['CODE']) ?>" class="form-control" >
                <label class="control-label"> TYPE : </label>
                    <input type="text" name="type" value="<?php echo($site['TYPE']) ?>" class="form-control" >
                <label class="control-label"> URL : </label>
                    <input type="text" name="url" value="<?php echo($site['URL']) ?> " class="form-control" >
                <label class="control-label"> PHOTO : </label>
                    <img src="image/<?php echo($site['PHOTO'])?>" width="80" height="80"/>
                </div>
                <div>
                    <button type="submit"> ENREGISTRER </button>
                </div>
</form>
        </div>
    </div>
</body>
</html>