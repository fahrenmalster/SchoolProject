<?php
// Start of code
$student1 = new \App\Models\Student();
$student2 = new \App\Models\Student();

// Add students to database
if ($student1->save()) {
    echo "Student 1 added successfully.";
} else {
    echo "Failed to add student 1.";
}

if ($student2->save()) {
    echo "Student 2 added successfully.";
} else {
    echo "Failed to add student 2.";
}
// End of code
