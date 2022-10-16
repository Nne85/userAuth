<?php
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];//complete this;
    $newpassword = $_POST['password']; //complete this;

    //resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
       $filename = './users.csv';
    $file = fopen('./users.csv', 'r');
    
    //open file and check if the username exist inside
    if ($email === $_POST['email']){
        $file = fopen('./users.csv', 'w');
        fgetcsv($file);
        fwrite($file, $newpassword);
        header("Location: ../dashboard.php");

        }else{
           echo "User does not exist";
        }
        fclose($file); 
    }
    resetPassword($email, $newpassword);
    //if it does, replace the password
    /* reset.php this file is meant to update the user password, the data is received from resetpassword.html, 
    it takes in the email and the new password and searches the file, if there is a match for the email, 
    it should update the password field with the new data from the form, else, 
    it should print out “User does not exist”
    $fname = "Test.txt";
$fhandle = fopen($fname,"r");
$content = fread($fhandle,filesize($fname));

$content = str_replace("oldword", "newword", $content);

$fhandle = fopen($fname,"w");
fwrite($fhandle,$content);
fclose($fhandle);
    if ($email === $_POST['email'] && $password === $_POST['password']){}//if it does, replace the password
*/

//echo "HANDLE THIS PAGE";


