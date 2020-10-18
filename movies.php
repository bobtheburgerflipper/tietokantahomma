<?php
 $host = 'localhost';
 $dbname = 't9jojo01';
 $username = 't9jojo01';
 $password = '';
 $con = mysqli_connect($host,$username,$password,$dbname);
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 $result = mysqli_query($con,"select title, year from movie");
 while($row = mysqli_fetch_array($result)) {
 echo $row['title'] . " " . $row['year'];
 echo "<br>";
 }
 mysqli_close($con);
?>