<?php
// Include your project's database credentials
include "your_database_credentials.php";

// Connect to the MySQL database
$db = new mysqli("localhost", "username", "password", "database_name");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Fetch all data from the table
$data = $db->query("SELECT * FROM your_table");

if ($data->num_rows > 0) {
    // Output data array as XML string
    echo "<?xml version='1.0' encoding='UTF-8'?>\n";
    echo "<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Body>\n";
    echo "  <your_xml_code>\n";

    // Process your XML code here
    foreach ($data as $row) {
        echo "  <message>";
        echo "    <name>" . htmlspecialchars($row['name']) . "</name>";
        echo "    <age>" . htmlspecialchars($row['age']) . "</age>";
        echo "    <address>" . htmlspecialchars($row['address']) . "</address>";
        echo "    <email>" . htmlspecialchars($row['email']) . "</email>";
        echo "  </message>";
        echo "  </your_xml_code>\n";
    }

    // Close the XML tag
    echo "  </your_xml_code>\n";
    echo "</soap:Body></soap:Envelope>";

    // Output the XML data in a more readable format if needed
} else {
    echo "No records found.";
}

// Close the database connection
$db->close();
?>
