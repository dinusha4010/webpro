
<?php $title="Exercise 3-Information";
include 'header.php';

// what to do with the form


$fname=$_POST["fname"] ;
$lname=$_POST['lname'] ;

echo "Hello $fname $lname, You are welcome to my site.";

include 'footer.php';

?>