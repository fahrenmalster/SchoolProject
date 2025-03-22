<?php
// This script is used to fetch data from an API

// Replace 'YOUR_API_KEY' with your actual API key
$apiKey = "YOUR_API_KEY";
// Make a GET request to the API endpoint
$response = file_get_contents("https://api.example.com/data?apikey=" . $apiKey);
// Decode the JSON response and parse it into an associative array
$data = json_decode($response, true);

if (isset($data) && is_array($data)) {
    foreach ($data as $key => $value) {
        echo "Key: $key, Value: $value\n";
    }
} else {
    echo "No data found.\n";
}
?>
