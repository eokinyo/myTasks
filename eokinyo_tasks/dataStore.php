<?php 
$title = "User info";
include 'header.php'; ?>
<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
echo "Hello ".$fname. " " . $lname . ", You are welcome to my site.";
?>


<?php include 'footer.php'; ?>