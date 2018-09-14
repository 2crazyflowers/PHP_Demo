<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    //power ->2 to the 7th power
    echo pow(2,7) . "<br>";
    
    
    //random number
    //everytime you refresh the page it will give you a new random number
    echo rand() . "<br>";
    
    //this gives a random number between 1 and a 1000
    echo rand(1, 1000) . "<br>";
    
    //this gives the square root of the number in the parathesis
    echo sqrt(100) . "<br>";
    
    //this rounds the number up
    echo ceil(5.2) . "<br>";
    
    //this rounds the number down
    echo floor(5.6) . "<br>";
    
    //this correctly rounds number up or down 
    echo round(7.2) . "<br>";
    echo round(7.8) . "<br>";
    //http://php.net/manual/en/ref.math.php
    //php site that gives all the math functions
    

    
?>

</body>
</html>