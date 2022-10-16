<?php
session_start();

function logout(){
   
    if(isset($_SESSION)){
       session_destroy();
       header('Location: ../index.php');

    }
  
    /*session_start(); $_SESSION['email'] = ''; unset($_SESSION['email']); session_destroy(); header('location:index.php');
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
}
logout();
//echo "<h1>YOU HAVE SUCCESSFULLY LOGGED OUT OF THIS PAGE</h1>";
?>