<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
    
    //array functions
    //http://php.net/manual/en/ref.array.php
    
    $list = ['bananas', 'apples', 'milk', 'chocolate chips'];
    
    print_r($list);
    echo "<br>";
    
    //takes the list and sorts alphabetically
    sort($list);
    print_r($list);
    echo "<br>";
    
    //takes the array and shuffles it
    shuffle($list);
    print_r($list);
    echo "<br>";
    
    //prepend one or more elements to the beginning of an array
    array_unshift($list, 'bread', 'chicken');
    print_r($list);
    echo "<br>";


    
    
    
    $numbers = [50, 60, 88, 97, 2, 10];
    //find the maximum number
    echo max($numbers) . "<br>";
    //find the minimum number
    echo min($numbers) . "<br>";
    
    print_r($numbers);
    echo "<br>";
    //sort the array of numbers
    sort($numbers);
    print_r($numbers);
    echo "<br>";
    
    //takes the array and shuffles it randomly
    shuffle($numbers);
    print_r($numbers);
    echo "<br>";
    
    
    /*Use a pre-built Array function here and echo it */

    $list = ['laundry', 'kitty litter', 'plant new plants', 'make calls and emails'];

    array_unshift($list, 'go for walk', 'learn php');
    print_r($list);
    echo "<br>";
    $found = in_array('kitty litter', $list);

    echo 'kitty litter ' . "found at index" . $found; 

    
?>

</body>
</html>