<!DOCTYPE html>
<html>

<head>
    <title>Student Information</title>
</head>

<body>

<h2>Student Information</h2>

<form method="GET" action="get.php">

    <label>Student ID:</label>
    <input type="text" name="student_id">
    <br><br>

    <label>Name:</label>
    <input type="text" name="name">
    <br><br>

    <label>Email:</label>
    <input type="email" name="email">
    <br><br>

    <label>Password:</label>
    <input type="password" name="password">
    <br><br>

    <label>Gender:</label>
    <input type="text" name="gender">
    <br><br>

    <label>Department:</label>
    <input type="text" name="department">
    <br><br>

    <label>Address:</label>
    <input type="text" name="address">
    <br><br>

    <button type="submit">Submit</button>

</form>


<?php

if (isset($_GET["student_id"])) {

    $student_id = $_GET["student_id"];
    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];
    $gender = $_GET["gender"];
    $department = $_GET["department"];
    $address = $_GET["address"];

    echo "<h3>Student Information</h3>";

    echo "Student ID: " . $student_id . "<br>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Department: " . $department . "<br>";
    echo "Address: " . $address . "<br>";
}

?>

</body>
</html>
