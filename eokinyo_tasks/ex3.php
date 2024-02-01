<?php 
$title = "Ex3";
include 'header.php'; ?>
<h3>1. Create a file (ex3.php): 
    Create a file named ex3.php in your exercise folder. 
    Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3>
<p>Done</p>
<h3>2. Form Creation: 
    Create a simple HTML form to collect the user’s Firstname and Lastname. 
    Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h3>
    <form methon ="post" action="dataStore.php">
        Firstname: <input type = "text" name = "fname"> <br><br>
        Lastname: <input type = "text" name = "lname"> <br><br>
        <input type = "submit" value = "Submit">
    </form>

<?php include 'footer.php'; ?>