<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP */
$number = 10;

if ($number > 10) {
    echo "it is a big number";
} elseif ($number < 10) {
    echo "it is a small number";
} else {
    echo "I love PHP <br>";
}

/*	Step 2: Make a forloop  that displays 10 numbers */

    
    for($number = 0; $number < 11; $number++) {
        
        echo $number . "<br>";
    
    }

/*  Step 3 : Make a switch Statement that test againts one condition with 5 cases */
    $number = 4;
    
    switch ($number) {
            case 5;
            echo "is equal to 5";
            break;
            case 3;
            echo "is equal to 3";
            break;
            case 1;
            echo "is equal to 1";
            break;
            case 2;
            echo "is equal to 2";
            break;
            case 4;
            echo "is equal to 4";
            break;
    }
	
?>

</body>
</html>