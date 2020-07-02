<?php
require_once("conn.php");
$login=$_POST["username"];
$pass=md5($_POST['password']);
$ps=$pdo->prepare("SELECT * FROM users WHERE LOGIN=? AND PASSWORD=?");
$param=array($login,$pass);
$ps->execute($param);
if($user=$ps->fetch()){
    session_start();
    $_SESSION['PROFILE']=$user;
    header("location:site.php");
}
else {
    header("location:Login.php");
}

?>