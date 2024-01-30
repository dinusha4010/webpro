<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
  <div class="container-sm">
  
  <nav class="navbar navbar-expand-lg  bg-light  sticky-top ">
  <div class="container-fluid ">
  <a class="navbar-brand" href="#"><img src="Image/mortarboard_.png" alt="logo"></a>
  <a class="navbar-brand" href="#"><img src="Image/mortarboard_.png" alt="logo"></a>
  <a class="navbar-brand" href="#"><img src="Image/mortarboard_.png" alt="logo"></a>
  <a class="navbar-brand" href="#"><img src="Image/mortarboard_.png" alt="logo"></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Exercise 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Exercise 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Exercise 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Exercise 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Exercise 5</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Exercise 6</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Exercise 7</a>
        </li>

      </ul>
    </div>
  </div>
</nav>


    <div class="container text-center ">
    <div class="row">
    <div class="col-sm-3 bgcolor">
        <h1>Web Programming Individual Tasks
</h1>
        

</div>
    <div class="col-sm-9 text-start bgcolor2" >

    <h3>3.1 Write PHP code to output the following message:<br> Hello world! My name is "David"</h3>
    
<?php
echo "Hello world! My name is \"David\" ";
?>

<h3>Create a PHP variable named $title and assign it 
    the value "PHP is interesting." 
    Then, use this variable as the content within an  (heading 4) element.</h3>

    <?php
    $title="PHP is interesting." ;
    echo "<h4>$title</h4>";

    ?>

    <h3>3.3Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. These variables
         represent the grades of three students in the course. To display this information,
          create an HTML table within your PHP code. The table should be structured with columns
           for Serial Number (S.n.), Name, and Grade, and it should look like this:</h3>

    <?php

    $g1=5;
    $g2=4;
    $g3=5;



    ?>
    <table>
        <tr><th>S.n.</th><th>Name</th><th>Grade</th></tr>
        <tr><td>1</td><td>John</td><td><?php echo $g1 ?></td></tr>
        <tr><td>2</td><td>Alice</td><td><?php echo $g2 ?></td></tr>
        <tr><td>3</td><td>Bob</td><td><?php echo $g3 ?></td></tr>
    </table>

    <h3>3.4 Take a screenshot that confirms your development environment setup and include it as an image in the "ex1.php" file.</h3>
    <img src="./Image/24.png" class="img-fluid" alt="Web development environment">


    </div>
    

  
  <div class="container text-center bgcolor3">
  <div class="row">  
  <div class="col-sm-4">&copy; Dinusha Kaluarachchi</div>
  <div class="col-sm-4">2024</div>
  <div class="col-sm-4">All Right reseverd </div>
 

  


  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>