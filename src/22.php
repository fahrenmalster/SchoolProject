<?php
// Your PHP code goes here

$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "schoolproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from a table
$sql = "SELECT * FROM your_table_name";
$result = $conn->query($sql);

// Output data of the query
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. ", name: " . $row["name"] . "\n";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
