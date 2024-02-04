<?php 
$title = "Ex3";
include 'header.php'; ?>

<h3>1. Create a file (ex4.php): 
    Create a file named ex4.php in your exercise folder. 
    Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3>

<p>Done</p>
<h3>2. If-Else: 
    Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. 
    (18 or more than 18 years is eligible for voting, use form to get user input).</h3>
<p></p>
<form method="post" action=>
        <div>
            <div class="col-sm-6">
                Name: <input type="text" name="nimi" required> <br><br>
            </div>
            <div class="col-sm-6">
                Age: <input type=int name="age" required><br><br>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" value="Submit">
        </div>
    </form>
<h3>3. Switch Case: 
    Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:
    It's August, so it's still holiday.
    Not August, this is Month-name so I don't have any holidays
    Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h3>
<p></p>
<h3>4. For Loop: 
    Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>
<p></p>
<h3>5. While Loop: 
    Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>
<p></p>
<h3>6. Foreach Loop: 
    Write a PHP script that will print all the elements of an array. 
    $myarray=("HTML", "CSS", "PHP", "JavaScript").</h3>
<p></p>
<p></p>
<?php include 'footer.php'; ?>