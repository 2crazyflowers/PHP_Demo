<?php 
//isset — Determine if a variable is set and is not NULL
//http://php.net/manual/en/function.isset.php
    
if (isset($_POST['submit'])){
    $name = ['Edwin', 'Sara', 'Jackie', 'Morgan', 'Sherry'];
    $minimum = 5;
    $maximum = 20;
    //echo "yes it worked";
    //want to grab username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
    //don't want to echo this but it helps to see that you extracted the information
//    echo "Hello " . $username . "<br>";
//    echo "Your password is " . $password;
    
    if (strlen($username) < $minimum ) {
        
        echo "Username must be longer than 5 characters" . "<br>";
        
    }
    
    if (strlen($username) > $maximum ) {
        
        echo "Username must be shorter than 20 characters" . "<br>";
        
    }
    
    if (strlen($password) < $minimum ) {
        
        echo "Password must be longer than 5 characters" . "<br>";
        
    }
    
    if (strlen($password) > $maximum ) {
        
        echo "Password must be shorter than 20 characters" . "<br>";
        
    }
    
    if (in_array($username, $name)) {
        
        echo "that username is already in use, please pick another";
        
    } else {
        
        echo "Welcome " . $username . "<br>";
    }
    
}    
    
?>
