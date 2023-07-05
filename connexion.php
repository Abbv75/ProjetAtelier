<?php
session_start();

try {
    $bd = new PDO("mysql:host=localhost;dbname=couturedb1", "root", "");
} catch (Exception $e) {
    die($e->getMessage());
}
if(isset($_POST['username']) && isset($_POST['password'])){
    $query=$bd->prepare("SELECT * FROM utilisateur  WHERE username=? and password=?");
    $query->bindValue(1,$_POST['username']);
    $query->bindValue(2,$_POST['password']);
    $query->execute();
    
   if($row=$query->fetch()){

        $_SESSION['username']=$_POST ['username'];

        header("Location:dashboard.php");
    }else{
        header("Location:index.php");
    }
}