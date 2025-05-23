<?php 
$student_id = 12345;
$name = "Student Name";
$email = "student@example.com";
$password = "secure_password";

if ($student_id >= 0) {
    $result = mysqli_query($conn, "SELECT * FROM students WHERE student_id = $student_id");
    
    if (mysqli_num_rows($result) > 0) {
        echo "Student with the given ID exists.";
    } else {
        echo "Student with the given ID does not exist.";
    }
} else {
    echo "Invalid student ID.";
}
?>
