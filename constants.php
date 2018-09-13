<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    //constants are like variables
    //we give them specific values
    //we define in functions
    
    //this is a variable
    //you can change it to whatever you want
    //as a variable it is changeable
    $number = 10;
    echo $number . "<br>";

    $number = 10000;
    echo $number . "<br>";

    $number = "Sara";
    echo $number . "<br>";
    
    //this is a constant
    define("NAME", 1000);
    
    //you cannot change it once you give it meaning or a value
    //so this does not work

    $NAME = 2000;
    
    echo NAME;
    
?>

</body>
</html>