

<?php
// Database connection credentials
$hostname = 'localhost'; // Replace with your database server host
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$database = 'rohan'; // Replace with your database name

// Create a connection to the database
$connection = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
