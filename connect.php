<?php

$user="root";
$pass="root";
$dbname="test";
$host="localhost";
$pdo = new PDO("mysql:dbname={$dbname};host={$host}", $user, $pass);

$sth = $pdo->prepare("SELECT * FROM employee");
$sth->execute();
while($row = $sth->fetch(PDO::FETCH_ASSOC)){
	echo $row['employee_name']."<br/>";
}


?>