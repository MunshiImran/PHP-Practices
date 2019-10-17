<?php


    session_start();


    if(isset($_SESSION['success'])){
        header('location: admin.php');
    }


    if(isset($_POST['submit'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        define('EMAIL','admin@gmail.com');
        define('PASSWORD','786');
        
        if($email == EMAIL && $password == PASSWORD){
            
            $_SESSION['success'] = '';
            
            header('location: admin.php');
        }
        else{
            $fail = "password does not match!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>log in</title>
</head>
<body>
   
   
   
   <form action="" method="post">
       <input type="email" name="email" placeholder="email" required>
       <br>
       <input type="password" name="password" placeholder="password" required>
       <br>
       <input type="submit" name="submit" value="submit">
   </form>
   <br>
   <p><?php if(isset($fail)){echo $fail;} ?></p>
    
</body>
</html>