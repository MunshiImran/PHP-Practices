<?php
    session_start();

    if(!isset($_SESSION['success'])){
        header('location: index.php');
    }
?>




<h1>Congratulation!</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="logout.php">LOG OUT</a>