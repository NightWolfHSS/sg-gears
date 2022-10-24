<?php 

/*cnf connect database*/
$host = "localhost";
$username = "root";
$password  = "root";

// connection 
$conn = new mysqli($host, $username, $password, "dbname - first create dbname");

// check connection
if ($conn->connect_error) {
	die("connection filed: " . $conn->connect_error);
}

echo "yehhh ";
