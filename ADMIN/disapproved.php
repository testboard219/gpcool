<?php


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=global','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id =$_POST['id'] ?? null;




$statement = $pdo->prepare('DELETE FROM approvetableone WHERE id = :id');
$statement->bindValue(':id',$id);
$statement->execute();


header('location:approve.php');









?>