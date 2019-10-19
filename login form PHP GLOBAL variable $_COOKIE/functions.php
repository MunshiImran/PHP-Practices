<?php

   function user_login(){
       
       if(isset($_SESSION['success'])|| isset($_COOKIE['success'])){
           
           return true;
           
       }
       
   }

?>