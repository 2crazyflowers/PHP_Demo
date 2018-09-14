<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
   <?php 
    if (isset($_POST['submit'])) {
        $pet = $_POST['favorite_pet'];
        echo "You pressed: " . $_POST['submit'] . "<br>";
        echo "Your favorite pet is a: " . $pet;
        
    }

    ?>
    <form action="form_favpet.php" method="post">
        <input type="text" placeholder="favorite pet" name="favorite_pet">
        <input type="submit" name="submit">

    </form>
    
</body>
</html>