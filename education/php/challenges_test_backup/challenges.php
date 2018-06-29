<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techclubwebsite_dbp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, title, description, details, picture FROM challenges ORDER BY id DESC LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Title: " . $row["title"]. " " . " - Description: " . $row["description"] . " - Details: " . $row["details"]. "<br>";
    }
} else {
    echo "No challenges";
}
$conn->close();
?>