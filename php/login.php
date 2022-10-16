<?php
session_start();


if(isset($_POST['submit'])){
    $email= $_POST['email'];//finish this line
    $password = $_POST['password'];//finish this

}


function loginUser($email, $password){
    $filename = './users.csv';
    $fp = fopen($filename, 'r');
    fgetcsv($fp);
    fclose($fp); 
    if ($email === $_POST['email'] && $password === $_POST['password']) {
        session_start();
        header("Location: ../dashboard.php");
  } else{
    session_unset();
 header("Location: ../login.html");
  }
}
   

loginUser($email, $password);
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */


//echo "HANDLE THIS PAGE";
?>
