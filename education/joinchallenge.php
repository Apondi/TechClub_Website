<?php 
$servername = "localhost";
$dbname = "techclubwebsite_dbp";
$username = "root";
$password = "root";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected Successfully <br />";
	}
catch(PDOException $e){
	echo "Connection Failed: " .  $e->getMessage();

$query=$conn->prepare("INSERT INTO joinchallenge (name, email, specialization) VALUES (?,?,?)");
$query->bindParam(1, $name);
$query->bindParam(2, $email);
$query->bindParam(3, $specialization);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['specialization'];

$query->execute();

$conn = null;

echo 'Hello '.$_POST['name'].' thanks for joining the challenge</br>';
echo 'Your team will get back to you at'.$_POST['email'].'soon.</br>';
?>