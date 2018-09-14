<?php 
    
if (isset($_POST['submit'])){
    
    //echo "yes it worked";
    //want to grab username and password
    $username = $_POST['username'];
    $password = $_POST['password'];
    //don't want to echo this but it helps to see that you extracted the information
    echo "Hello " . $username . "<br>";
    echo "Your password is " . $password;
    
}    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
    
    <input type="text" placeholder="Enter Username" name="username"><br>
    <br>
    <input type="passord" placeholder="Enter Password" name="password"><br>
    <br>
<!--    name submit currently is the only thing that is posted to the php above -->
    <input type="submit" name="submit">
    
    
    
</form>


</body>
</html>