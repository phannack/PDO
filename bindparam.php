<?php
$dbname="test";
$host="localhost";
$user="root";
$pass="root";

$pdo = new PDO("mysql:dbname={$dbname};host={$host}",$user, $pass);

$sql = "SELECT * FROM user WHERE username = :user";
$sth = $pdo->prepare($sql);
$sth->execute(  Array(':user' => $_POST['user'])     );
?>