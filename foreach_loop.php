<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    //most powerful loop
    //works only with arrays
    //goes through each value in array until it is finished
    //do not need to tell it when to stop - no condition
    $numbers = [325,458,689,850,967,1002];
    
    foreach($numbers as $number){
        
        echo $number . "<br>";
        
    }
    
    //only finishes until it goes through entire array
    
    
?>

</body>
</html>