<?php
require_once("security.php");
?>

<?php
$code=$_GET['code'];
require_once("conn.php");
$ps=$pdo->prepare("DELETE FROM web WHERE CODE=?");
$params=array($code);
$ps->execute($params);
header("location:site.php");

?>