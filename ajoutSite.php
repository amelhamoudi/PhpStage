<?php
require_once("conn.php");
$type=$_Post['type'];
$url=$_Post['url'];
$nomPhoto=$_FILES['photo']['name'];
$fichierTempo=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTempo,"./image/$nomPhoto");
$req= "insert into web(Type,URL,PHOTO) VALUES ('$type','$url','$nomPhoto')";
mysql_query($req) or (die(mysql_error()));
?> 
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table border="3">
<tr>
<td> Type  </td>
<td> <?php echo($type) ?> 
</td>  </tr>
<tr>
<td>
URL
</td>
<td> <?php echo($url) ?> </td>

 </tr>
    <tr>
        <td> Photo  </td>
        <td> <img src="image/<?php echo($nomPhoto) ?>">
        </td>  </tr>
</table>
</body>
</html>