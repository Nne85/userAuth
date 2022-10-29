<?php

 
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    registerUser($username, $email, $password);
}

function registerUser($username, $email, $password){
  $data = array(
    'fullname' => $username,
    'email' => $email,
    'password'=> $password
  );  

  if (checkifUserExists($email)) {
    echo "User Already Exist";}
    else{
    $filename = '../storage/users.csv';
    $fp = fopen($filename, 'a');
    fputcsv($fp, $data);
    fclose($fp);
    echo "User Successfully Registered";
    header('Location: ../dashboard.php ');
  }
      
}

function checkifUserExists ($email) {
    $filename = '../storage/users.csv';  
    $fp = fopen($filename, 'r'); 
    while(!feof($fp)){
        $line = fgetcsv($fp);
        if ($line[1] == $email){
            return true;
        }
    }
     return false;
        
   

}



?>