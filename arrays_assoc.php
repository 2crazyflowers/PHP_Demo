<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    // normal array
    $number = array(10, 20, 49);
    // print out 3rd value
    echo $number[2] . "<br>";
    print_r($number);
    echo "<br>";
    
    
    //associative array
    // how can I remember where the value is of an array if there are 1000 numbers?
    //firt name is called a key and edwin is the value
    $names = array("first_name" => 'Edwin', "last_name" => 'Diaz');
    
    print_r($names);
    echo "<br>";
    
    echo $names['first_name'] . "<br>";
    
    echo $names['first_name'] . " " . $names['last_name'] . "<br>";
    
?>


</body>
</html>