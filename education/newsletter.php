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

$query=$conn->prepare("INSERT INTO newsletter (email) VALUES (?)");
$query->bindParam(1, $email);

$email = $_POST['email'];

$query->execute();

$conn = null;

echo 'Thanks for signing up for our newsletter.';
?>