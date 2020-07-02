<?php
require_once("security.php");
?>

<?php
$code=$_POST['code'];
$type=$_POST['type'];
$url=$_POST['url'];
$nomPhoto=$_FILES['photo']['name'];
require_once("conn.php" );
if($nomPhoto==""){

    $ps=$pdo->prepare("UPDATE web SET TYPE=? ,URL=? WHERE CODE=?");
    $params=array($type,$url,$code);
    $ps->execute($params);

}
else{
    $fichierTempo=$_FILES['photo']['tmp_name'];
    move_uploaded_file($fichierTempo,'./image/'.$nomPhoto);
    $ps=$pdo->prepare("UPDATE web SET  TYPE=?, URL=?, PHOTO=? WHERE CODE=?");
    $params=array($type,$url,$nomPhoto,$code);
    $ps->execute($params);

}
header("location:site.php");
?>