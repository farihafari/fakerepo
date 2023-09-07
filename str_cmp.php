<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Str Function</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter country code</label>
        <input type="text" name="abc">
        <button type="submit" name="sub" >submit</button>
    </form>
    <?php
        if(isset($_POST['sub'])){
            $flag = $_POST['abc'];
            $code = "+92";
            $res = strcmp($flag,$code);
            if($res == 0){
                echo "valid country code";
            }
            else{
                echo "Invalid country code";
            }
        }

?>
</body>
</html>