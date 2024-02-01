<?php
$title="Exercise 4";
include 'header.php'
?>
<h4>If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input)</h4>

<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP-SELF'])?>>

<div class="row mb-3">
    <label for="name" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="name" placeholder="Name" required>
    </div>
</div>
 <div class="row mb-3">
    <label for="age" class="col-sm-2 col-form-label"  >Age :</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="age" placeholder="Age"  min="1" max="150" required>
    </div>
</div>

<button type="submit" class="btn btn-primary" name="submit_vote">Check Eligibility</button>
<br><br>

</form>

<?php

$name=$_POST["name"] ;
$age=$_POST["age"] ;

if(!empty($name) &&  !empty($age))
{

if ($age>=18)
{

    echo "<h4>$name, you are eligible for voting</h4> ";
}
else{
    echo "<h6>$name, Sorry you are not eligible for voting</h6><br><br> ";

}
}
?>

<h4><br><br>Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays</h4>




<?php
// Get the current month name
$currentMonth = date("F");


switch ($currentMonth) {
    case 'August':
        echo "<h6>It's August, so it's still holiday.</h6>";
        break;
    default:
        echo "<h6>Not August, this is $currentMonth so I don't have any holidays.</h6><br><br>";
}
?>

<h4>For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h4>

<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP-SELF'])?>>

<div class="row mb-3">
    <label for="number" class="col-sm-2 col-form-label">Enter number</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="number" placeholder="Number" min="1" required>
    </div>
</div>
 

<button type="submit" class="btn btn-primary" >Generate multiplication table</button>
<br><br>
</form>
<?php

$number=$_POST["number"] ;


if(!empty($number))
{
    echo "<h6>Multiplication Table of $number</h6>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";
        echo "<td>$number x $i = </td>";
        echo "<td>" . ($number * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

}
?>
<h4><br><br>While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h4>

<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP-SELF'])?>>

<div class="row mb-3">
    <label for="number2" class="col-sm-2 col-form-label">Enter number</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="number2" placeholder="Number" min="1" required>
    </div>
</div>
 

<button type="submit" class="btn btn-primary" >Submit</button>
<br><br>
</form>

<?php
$number2=$_POST["number2"] ;
if(!empty( $number2))
{

 echo "<h6>Numbers from 1 to $number2:</h2>";
 $i = 1;
 while ($i <= $number2) {
     echo "$i ";
     $i++;
 }
}
?>

<h4><br><br>Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h4>



<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");


echo "<h5>Elements of the array:</h5>";
echo "<ul>";
foreach ($myarray as $element) {
    echo "<li>$element</li>";
}
echo "</ul>";
?>



<?php include 'footer.php'; ?>