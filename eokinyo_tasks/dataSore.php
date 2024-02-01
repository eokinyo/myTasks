<?php 
$title = "User info";
include 'header.php'; ?>

$fname = $_POST[fname];
$fname = $_POST[lname];
echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>";


<?php include 'footer.php'; ?>