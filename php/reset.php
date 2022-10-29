<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];//complete this;
    $newpassword = $_POST['password']; //complete this;

    resetPassword($email, $newpassword);
}

function resetPassword($email, $password){
         $filename = '../storage/users.csv';
         $fp = fopen($filename, 'r'); 
         while(!feof($fp)){
             $line = fgetcsv($fp);
             if ($line[1] == $email){
         $line[2] = $password;
         fclose($fp); 
         $fp = fopen($filename, 'w'); 
         fputcsv($fp, $line);
         fclose($fp);
         echo "Password Updated";
        //header("Location: ../dashboard.php");
        exit();
             }
            }
    }
           echo "Invalid Username";
           fclose($fp); 
        
    
   

            
       
    
   
    
    //if it does, replace the password
    /* reset.php this file is meant to update the user password, the data is received from resetpassword.html, 
    it takes in the email and the new password and searches the file, if there is a match for the email, 
    it should update the password field with the new data from the form, else, 
    it should print out “User does not exist”
,$content);
fclose($fhandle);
    if ($email === $_POST['email'] && $password === $_POST['password']){}//if it does, replace the password
*/

//echo "HANDLE THIS PAGE";


