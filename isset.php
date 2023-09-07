<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>
</head>
<body>
    <!-- 
       SUPER global variables
        $_POST
        $_GET
        $_FILES
        $_SESSION
        $_SERVER
        $_COOKIE
        $_ENV
        $_REQUEST
     -->
<form action="" method="post">
    <label for="">User Name</label>
    <input type="text" name="u_name">
    <button type="submit" name="sub">Submit</button>
</form>
<?php
if(isset($_POST['sub'])){
    $name = $_POST['u_name'];
    if($name == "huzaifa"){
    echo  "valid name ". $name;
}
else{
    echo  "Invalid name ";
}
}

?>

</body>
</html>