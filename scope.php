<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    
    $x = 'outside'; //global scope
    
    function convert() {
        global $x; //this makes it a global scope
        $x = 'inside'; //inside
    }
    
    echo $x . "<br>";
    
    convert();
    
    echo $x . "<br>";

    
?>

</body>
</html>