<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    //all php string functions
    //http://php.net/manual/en/ref.strings.php
    
    $string = "Hello PHP Student, do you like what you are learning?";
    echo $string . "<br>";
    
    //gives string length     
    echo strlen($string) . "<br>";
    
    //string to upper case
    echo strtoupper($string) . "<br>";
    
    //string to lower case
    echo strtolower($string) . "<br>";
    
    //string to array
    $array = str_split($string);
    print_r($array);
    echo "<br>";
    //
    
    
?>

</body>
</html>