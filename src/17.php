<?php
// Define variables from input form data
$studentName = $_POST['studentName'];
$userId = $_POST['userId'];
$password = $_POST['password'];

// Check if user exists in database
if (DB::connect() && DB::isUserExist($studentName, $userId, $password)) {
    // Generate random hash for the password
    $hash = bcrypt('secret', $password);
    
    // Save the hashed password to the database
    DB::update('users', ['password' => $hash], ['name' => $studentName]);
    
    echo "User registered successfully!";
} else {
    echo "Invalid username or password";
}
?>
