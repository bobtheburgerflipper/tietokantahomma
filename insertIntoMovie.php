<?php
$host = 'localhost';
$dbname = 't9jojo01';
$username = 't9jojo01';
$password = '';
$con = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$title = mysqli_real_escape_string($con, $_POST['tl']);
$year = mysqli_real_escape_string($con, $_POST['yr']);
$description = mysqli_real_escape_string($con, $_POST['desc']);
$sql = "INSERT INTO movie (title, year, description)
VALUES ('$title', '$year', '$description')";
if (!mysqli_query($con, $sql)) {
 die('Error: ' . mysqli_error($con));
}
echo "1 record added";
mysqli_close($con);