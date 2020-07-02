<?php
require_once("security.php");
?>
<?php
require_once("conn.php");
$req="SELECT * FROM web";
$ps=$pdo->prepare($req);
$ps->execute();
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/myStyle.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
</head>

<body>
<?php require_once("entete.php") ?>
<div class="col-md-6 col-xs-12 spacer">
<div class="panel panel-info  spacer">
    <div class="panel-heading"> Listes des Sites </div>
<div class="panel-body">
    <table class="table table-striped">
        <thead>
        <tr>

          <th> CODE </th>  <th> TYPE</th> <th> URL </th> <th> PHOTO </th>
        </tr>
        </thead>
        <tbody>
        <?php while($et=$ps->fetch()){ ?>
            <tr>
                <td> <?php echo($et['CODE']) ?></td>
                <td><?php echo($et['TYPE']) ?></td>
                <td><?php echo($et['URL']) ?> </td>
                <td><img src="image/<?php echo($et['PHOTO']) ?>" width="60" height="60"> </td>
                <td><a onclick="return confirm('vous-etes sur ?');" href="supprimerSite.php?code=<?php echo($et['CODE'])?> "> supprimer </a> </td>
                <td> <a href="editSite.php?code=<?php echo($et['CODE']) ?>"> Editer  </a> </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>
</body>
</html>