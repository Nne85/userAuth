<?php

function logout(){
    session_start();
    if($_SESSION){
    
       session_destroy();
       header('Location: ../index.php');
exit();
    }
  else {
    header('Location: ../index.php?error=You are not logged in');
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