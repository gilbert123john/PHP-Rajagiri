<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO t_student (firstname, lastname, email)
VALUES 
('Jerusha', 'Ann', 'jeru@example.com'),
('Joseph', 'L', 'joseph@example.com'),
('Nithu', 'Rob', 'nithu@example.com'),
('Nikhil', 'vas', 'vas@example.com')
";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>