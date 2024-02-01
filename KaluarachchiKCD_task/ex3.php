<?php $title="Exercise 3";
include 'header.php';
?>

<h3>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site</h3>

<form method="post" action="process.php">

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







<?php ;
include 'footer.php';
?>