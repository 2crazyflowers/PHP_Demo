<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    
    
    function greeting($message) {
        
        echo $message;
        
        
    }
    
    //whatever you pass in here
    //goes to the function and gets 
    //passed in as the variable message
    greeting("<h1>hello, student</h1>");
    
    function calculate($number1, $number2){
        //2 ways to write this. This: 
        echo $number1 + $number2;
        
        // or this:
        $multiply = $number1 * $number2;
        
        echo "<br>" . "Lets muliply: " . $number1 . " * " . $number2 . " = " . $multiply;
    }
    
    calculate(12,24);
    
    
?>

</body>
</html>