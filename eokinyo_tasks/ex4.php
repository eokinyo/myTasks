<?php 
$title = "Ex4";
include 'header.php'; ?>

<h3>1. Create a file (ex4.php): 
    Create a file named ex4.php in your exercise folder. 
    Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3>

<p>Done</p>
<h3>2. If-Else: 
    Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. 
    (18 or more than 18 years is eligible for voting, use form to get user input).</h3>
<p></p>
<form method="post" name="Voter_Validation_Form" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> >
        <div class="form-row">
            <div class="col-sm-8">
                Name: <input type="text" name="nimi" required> <br><br>
            </div>
            <div class="col-sm-4">
                Age: <input type=int name="age" required><br><br>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" value="Submit">
        </div>
    </form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nimi  = $_POST["nimi"];
    $age = $_POST["age"];
    $votingAge = 18;
    if ($age>=$votingAge)
    {
        echo "Hey " .$nimi. ", you are eligible to vote";
    } elseif($age<$votingAge)
    {
        echo "Hey " .$nimi. ", you are underage! You need " .$votingAge - $age . " more years to be eligible to vote.";
    }
}

?>
<h3>3. Switch Case: 
    Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:
    It's August, so it's still holiday.
    Not August, this is Month-name so I don't have any holidays
    Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h3>
<p></p>
<?php
$month = date('F');
switch($month){
    case 'August':
        echo "It's August, so it's still holiday.";
        break;
    default:
    echo "Not August, this is ". $month. " so I don't have any holidays";
}
?>
<h3>4. For Loop: 
    Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>
<p></p>
<form method ="post" name="Multiplication table" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
Number: <input type="number" name="num" required>
<input type="submit" value="Submit number">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $n =$_POST["num"];
    echo "<table border='1'>";
    for($i=1; $i<=10; $i++){
        $multip = $n * $i;
        echo "<tr><td>$n X $i </td><td>$multip</td></tr>";
    }
    echo "</table>";
}
?>
<h3>5. While Loop: 
    Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>
<p></p>
<form method="post" name="1_to_n" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    New number: <input type="number" name="number">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['number'];
    if ($n > 0) {
        $i = 1;
        while ($i <= $n) {
            echo $i . "<br>";
            $i++;
        }
    }
}
?>

<h3>6. Foreach Loop: 
    Write a PHP script that will print all the elements of an array. 
    $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>
<p></p>
<?php

$myarray = array("HTML", "CSS", "PHP", "JavaScript");

foreach ($myarray as $value) {
    echo $value . "<br />";
}

?>

<p></p>
<?php include 'footer.php'; ?>