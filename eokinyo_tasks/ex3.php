<?php 
$title = "Ex3";
include 'header.php'; ?>
<h3><b>1. Create a file (ex3.php)</b>: 
    Create a file named ex3.php in your exercise folder. 
    Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3>
<p>Done</p><br><br>

<h3><b>2. Form Creation</b>: 
    Create a simple HTML form to collect the user’s Firstname and Lastname. 
    Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h3>
    <form method="post" action="dataStore.php">
        <div class="form-row">
            <div class="col-sm-6">
                Firstname: <input type="text" name="fname" required> <br><br>
            </div>
            <div class="col-sm-6">
                Lastname: <input type="text" name="lname" required><br><br>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" value="Submit">
        </div>
    </form>
    <br><br>
<h3><b>3. Bootstrap Styling: 
    Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your head tag.</h3>
    <p>Done</p> <br><br>

<h3><b>4. HTML Table</b>: 
    Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h3>
<?php
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
?>

    <table>
        <tr><th>S.n.</th> <th>Name</th> <th>Grade</th></tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php echo  $g1 ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php echo  $g2 ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo  $g3 ?></td>
        </tr>
    </table>
    <br><br>

<h3>5. String Variables: 
    Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
    Join them together and print the length of the string.</h3>
    <?php
    $str1 = "Hello";
    $str2 = "World";

    echo "The string length for \"Hello World\" is: " . strlen ($str1.$str2);
    ?>

<br><br>
<h3>6. Number Addition: 
    Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and an echo statement to output your answer.</h3>
    <?php
    $n1 = 298;
    $n2 = 234;
    $n3 = 46;
    $_result = $n1 + $n2 + $n3;
    echo "The output for the addition of these numbers is: " . $_result;
    ?><br><br>

<h3>7. Browser Detection: 
    Write a PHP script to detect the browser being used to view your pages. 
    Hint: Use predefined variables: $_SERVER .</h3>
    <?php
        echo $_SERVER['HTTP_USER_AGENT'];
    ?><br><br>

<h3>8. File Modification Time: 
    Write a PHP script in the footer section of your universal footer to display the last modification time of a file. 
    Hint: Use predefined variable $_SERVER, basename function  to get the filename , 
    filetime function to get the last modified time & date function to print the date and time </h3>
    <p>Done</p>
   <?php include 'footer.php'; ?>