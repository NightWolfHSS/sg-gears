<?php 

/*cnf connect database*/
$host = "localhost";
$username = "root";
$password  = "root";

// connection 
$conn = new mysqli($host, $username, $password);

// check connection
if ($conn->connect_error) {
	die("connection filed: " . $conn->connect_error);
}

echo "yehhh ";
