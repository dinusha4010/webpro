<?php $title="Exercise 3";
include 'header.php';
?>

<h4>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site<br><br></h4>

<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP-SELF'])?>>

<div class="row mb-3">
    <label for="fname" class="col-sm-2 col-form-label">First Name:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="fname" placeholder="First Name" required>
    </div>
</div>
 <div class="row mb-3">
    <label for="lname" class="col-sm-2 col-form-label"  >Last Name:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
    </div>
</div>

<button type="submit" class="btn btn-primary">Sign in</button>

<?php

$fname=$_POST["fname"] ;
$lname=$_POST["lname"] ;

if(!empty($fname) && !empty($lname))
echo "</h6><strong><br><br>Hello $fname $lname, You are welcome to my site.<br><br></strong></h6>";



?>

<br><br><h4>String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.<br><br></h4>



<?php
$str1 = "Hello"; 
$str2 = "World";
$str_full= $str1.$str2;
echo "<h6>Length of the $str_full is : ".strlen($str_full)."</h6>";

?>

<h4><br><br> Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.<br><br></h4>

<?php
$num1=298;
$num2=234;
$num3=46;
$total=$num1+$num2+$num3;
echo "<h6> Toal is : ".$total."</h6>"

?>

<h4><br><br> Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER<br><br>.</h4>
<?php

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
    
    return 'Other';
}

// Usage:

echo "<h6>My Browser is : " .get_browser_name($_SERVER['HTTP_USER_AGENT'])."</h6>";

?>



<?php 
include 'footer.php';
?>