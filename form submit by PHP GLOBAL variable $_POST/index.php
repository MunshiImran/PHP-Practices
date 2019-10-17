<?php

    $one = isset($_POST['fName']) ? ($_POST['fName']) : null;
    $two = isset($_POST['lName']) ? ($_POST['lName']) : null;
    $three = isset($_POST['email']) ? ($_POST['email']) : null;
    $four = isset($_POST['number']) ? ($_POST['number']) : null;


    if(isset($_POST['submit'])){
        $success = "Form has been submitted";
    }

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   
   <form action="" method="post">
       
       <input type="text" name="fName" placeholder="First Name" required>
       <br>
       <br>
       <input type="text" name="lName" placeholder="Last Name" required>
       <br>
       <br>
       <input type="email" name="email" placeholder="E-Mail" required>
       <br>
       <br>
       <input type="tel" name="number" placeholder="Phone Number" required>
       <br>
       <br>
       <input type="submit" name="submit" value="submit">
       
   </form>
   <br>
   
   <?php  if(isset($success)){ echo "<p>" . $success . "<p/>";}   ?>
   <br>
   
   <h5>First Name     : <?php echo $one?></h5>
   <h5>Last Name      : <?php echo $two?></h5>
   <h5>E-mail Address : <?php echo $three?></h5>
   <h5>Phone Number   : <?php echo $four?></h5>
    
</body>
</html>