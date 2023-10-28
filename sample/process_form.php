<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<body>
  

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = htmlspecialchars($_POST["first_name"]);
    $last_name = htmlspecialchars($_POST["last_name"]);
    $age = htmlspecialchars($_POST["age"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $religion = htmlspecialchars($_POST["religion"]);
    $school = htmlspecialchars($_POST["school"]);
    $course = htmlspecialchars($_POST["course"]);
    $hobbies = htmlspecialchars($_POST["hobbies"]);
    $skills = htmlspecialchars($_POST["skills"]);
    $dream_job = htmlspecialchars($_POST["dream_job"]);
    $motto = htmlspecialchars($_POST["motto"]);

    echo "<h2>Form Submission Result</h2>";
    echo "<p>First Name: $first_name</p>";
    echo "<p>Last Name: $last_name</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Religion: $religion</p>";
    echo "<p>School: $school</p>";
    echo "<p>Course: $course</p>";
    echo "<p>Hobbies: $hobbies</p>";
    echo "<p>Skills: $skills</p>";
    echo "<p>Dream Job: $dream_job</p>";
    echo "<p>Motto in Life: $motto</p>";

    echo '<br><a href="form.html">Back to Form</a>';
}


?>
</body>
</html>