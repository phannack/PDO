<?php
$dbname="test";
$host="localhost";
$user="root";
$pass="root";

$username="RAIN";

$pdo = new PDO("mysql:dbname={$dbname};host={$host}", $user,$pass);

$sql = 'INSERT INTO user(`user`, `pass`, `email`) VALUES (:user, :pass, :email)';
$sth = $pdo->prepare($sql);
$sth->execute(
      Array(
             ':user' => $_POST['user'],
             ':pass' => $_POST['pass'],
             ':email' => $_POST['email']
      )
);
?>