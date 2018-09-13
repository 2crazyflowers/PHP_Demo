<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    //want to pull a variable outside of a function and use it anywhere
    //use return
    
    function calculate($number1, $number2) {
        
        $sum = $number1 + $number2;
        
        return $sum;
        
    }
    //now can view sum outside of function and can use again
    $result = calculate(12,24);
    echo $result;
    
    //here we take existing variable result use it as a parameter back into the function to add 100 more to it and echo it out
    $result = calculate(100, $result);
    echo "<br>" . $result;
    
?>

</body>
</html>