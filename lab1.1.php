<?php
// Constant
define("COLLEGE_NAME", "ABC Engineering College");

// Variables
$studentName = "John";
$rollNo = 101;
$semester = "Semester 3";
$totalMarks = 500;
$obtainedMarks = 425;

// Calculate percentage
$percentage = ($obtainedMarks / $totalMarks) * 100;

// Display Result
echo "<h2>" . COLLEGE_NAME . "</h2>";
echo "<h3>Previous Semester Result</h3>";

echo "Student Name: " . $studentName . "<br>";
echo "Roll No: " . $rollNo . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Total Marks: " . $totalMarks . "<br>";
echo "Obtained Marks: " . $obtainedMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";
?>