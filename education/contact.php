<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "techclubwebsite_dbp";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected Successfully <br />";
	}
catch(PDOException $e){
	echo "Connection Failed: " .  $e->getMessage();
}

$query=$conn->prepare("INSERT INTO contact (name, email, message) VALUES (?,?,?)");
$query->bindParam(1, $name);
$query->bindParam(2, $email);
$query->bindParam(3, $message);


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query->execute();

$conn = null;

echo 'Hi '.$_POST['name'].' thanks for your interest.</br>';
echo 'I will contact you at '.$_POST['email'].'soon.</br>';
?>
