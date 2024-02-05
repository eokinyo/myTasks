<?php
// What to do with the data.
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

// The data is now saved. We now connect to the database server
//Connect to the database server

include 'db.php';

//Next, write sql statements to insert the data

$sql = "insert into studentsinfo(first_name, last_name, city, groupId)
        values('$fname', '$lname', '$city', '$groupid')";

if ($conn->query($sql)===TRUE){
    echo "Your data was recorded";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//Closs the 
$conn->close();
}
?>