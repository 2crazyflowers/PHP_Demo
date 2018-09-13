<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>



<?php
//this while loop will run the function until certain condition is met
//since 4 is always less than 10 it will continue to run forever
//it is also called an infinite loop
    
//    while(4 < 10){
//        
//        echo "hello student" . "<br>";
//    }
    
    //this is not an infinite loop
    $number = 4;
    
    while($number < 10){
        
        echo "hello student" . "<br>";
        //this or
        //$number = $number + 1;
        //this
        $number++;
    }
        
    
?>

</body>
</html>