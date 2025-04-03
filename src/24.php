<?php
// Include necessary libraries

// Define variables or arrays here
// For example:

// $data = ['key1' => 'value1', 'key2' => 'value2'];
// $selected_data = array_slice($data, 0, 5);

// Check if data is empty
if (empty($data)) {
    echo "Data is empty.";
} else {
    // Access data values
    foreach ($data as $key => $value) {
        echo "$key: $value\n";
    }
}

// Perform some operations on the selected data
$selected_data = array_slice($selected_data, 0, 5);

// Output the selected data
foreach ($selected_data as $key => $value) {
    echo "Key: $key, Value: $value\n";
}
