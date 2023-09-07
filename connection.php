<!-- 
    PDO support 12 dataases while  mysqli support only one database 
    PDO is Advancced technique
    PDO is more secure than mysqli_connect
 -->
<?php

$server = "mysql:host=localhost;dbname=aptech";
$user = "root";
$password = "";

$pdo =  new PDO($server,$user,$password);
// if($pdo){
//         echo "<script>alert('connected')</script>";
// }
// else{
//     echo "<script>alert('error')</script>";
// }

?>