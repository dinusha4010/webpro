

<?php 

$title="Exercise 1";
include 'header.php';
?>


<h4>3.1 Write PHP code to output the following message:<br> Hello world! My name is "David"</h4>
    
    <?php
    echo "Hello world! My name is \"David\" ";
    ?>
    
    <h6>Create a PHP variable named $title and assign it 
        the value "PHP is interesting." 
        Then, use this variable as the content within an  (heading 4) element.</h6>
    
        <?php
        $title="PHP is interesting." ;
        echo "<h6>$title</h6>";
    
        ?>
    
        <h4>3.3Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. These variables
             represent the grades of three students in the course. To display this information,
              create an HTML table within your PHP code. The table should be structured with columns
               for Serial Number (S.n.), Name, and Grade, and it should look like this:</h4>
    
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
    
        <?php include 'footer.php'; ?>