
<?php
require_once("security.php");
?>
<?php
try{

    $strConnection='mysql:host=localhost;dbname=mabase';
    $pdo= new PDO($strConnection,'root','');
}
catch (PDOException $e){
    $msg= 'ERREUR PDO dans ' . $e->getMessage();
    die($msg);
}
?>

