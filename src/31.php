<?php 
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

    echo "Connected successfully";

    // Example query to insert data into the database
    $sql = "INSERT INTO table_name (column1, column2) VALUES ('value1', 'value2')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>
