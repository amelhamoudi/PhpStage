<?php
require_once("security.php");
?>

<?php
$type=$_POST['type'];
$url=$_POST['url'];
$nomPhoto=$_FILES['photo']['name'];
$fichierTempo=$_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTempo,'./image/'.$nomPhoto);
require_once("conn.php" );
$ps=$pdo->prepare("INSERT INTO web(TYPE,URL,PHOTO) VALUES (?,?,?)");
$params=array($type,$url,$nomPhoto);
$ps->execute($params);
header("location:site.php");
?>
