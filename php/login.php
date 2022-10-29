<?php

session_start();

if(isset($_POST['submit'])){
    $email= $_POST['email'];//finish this line
    $password = $_POST['password'];//finish this

    loginUser($email, $password);
}


function loginUser($email, $password){
    $filename = '../storage/users.csv';
    $fp = fopen($filename, 'r');
    while (!feof($fp)){
    $line = fgetcsv($fp);
    if ($line[1] == $email && $line[2] == $password) {
    $_SESSION['username'] = $line[0];
    header("Location: ../dashboard.php");  
  
  }
  }
  echo "User does not exist";
  fclose($fp);
}



    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */


//echo "HANDLE THIS PAGE";
?>
