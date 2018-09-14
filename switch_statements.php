<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<?php 
    $number = 100;
    
    
    //http://php.net/manual/en/control-structures.switch.php
    switch($number){
        // if it is equal to 34
        case 34:
            echo"it is 34";
            break;
        case 37:
            echo"it is 37";
            break;
        case 35:
            echo"it is 35"; break;
        case 24:
            echo"it is 24";
            break;
        case 17:
            echo"it is 17";
            break;
        default:
            echo "no match";
            break;
    }
    echo "<br>";
    echo "<h4>Other test</h4>";
    
    
    //testing to see which case is true
    $number = 100;
    
    switch(true){
        // if it is equal to 34
        case ($number > 34):
            echo "it is greater than 34";
            break;
        case ($number < 34):
            echo "it is less than 34";
            break;
        case ($number == 34):
            echo "it is equal to 34"; break;
        default:
            echo "no match";
            break;
    }
    
    
?>

</body>
</html>