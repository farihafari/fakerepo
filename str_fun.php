<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>
    <!-- 
        str_replace
        strlen
        explode
        implode
        strtolower
        strtoupper
        strcmp
        
     -->
<?php
$str = "hello this is Musfirah. Musfirah is in class 1.she is intellectual.";
$ary  = ["this","is","alisha"];
// $final = str_replace('Musfirah','Alisha',$str);
// $final = strlen($str);
// $final = explode(" ", $str);  //string to array
// echo $final;
// print_r($final);
$res = implode(" " , $ary); // array to string conversion
echo $res; 

?>
</body>
</html>