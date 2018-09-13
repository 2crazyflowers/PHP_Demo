<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    //functions allow us to wrap code in a block and name it and can use it in various places and call it to run it
    // very similar to if statements
    function startGame() {
        echo "start game to play";
    }
    
    function doMath(){
        echo 545 + 900;
    }
    
    function saySomething(){
        
        echo "hello student, do you like this function?";
        //you can start another function inside a function
        startGame();
        doMath();
        
    }
    
    //call the function
    //this starts up the function
    saySomething();
    
?>

</body>
</html>