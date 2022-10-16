<?php

 
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


}

function registerUser($username, $email, $password){
    $filename = './users.csv';
    $fp = fopen($filename, 'a');
    fwrite($fp, print_r($username, true));  //save data into the file
    echo '<br>';
    fwrite($fp, print_r($email, true));
    echo '<br>';
    fwrite($fp, print_r($password, true));
    echo '<br>';
    fclose($fp);
    //echo "OKAY";
}
registerUser($username, $email, $password);
echo "User Successfully registered";

?>