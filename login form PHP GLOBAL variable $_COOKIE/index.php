<?php
    session_start();


    include('functions.php');


    if(user_login()){
        header('location: admin.php');
    }


    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $keep = isset($_POST['keep']);
        
        define('USERNAME','imran');
        define('PASSWORD','12345');
        
        if(USERNAME == $username && PASSWORD == $password){
            $_SESSION['success'] = '';
            
            setcookie('success',$keep,time() + 60*60);
            
            header('location: admin.php');
            
        }else{
            
        $fail = "username or password does not match!";
            
    }
        
    }

?>




<form action="" method="post">
    <input type="text" placeholder="username" name="username">
    <br>
    <input type="password" placeholder="password" name="password">
    <br>
    <input type="checkbox" name="keep" id="keep">
    <label for="keep">keep me logged in</label>
    <br>
    <input type="submit" value="submit" name="submit">
</form>
<br>

<p><?php if(isset($fail)){ echo $fail ;} ?></p>
