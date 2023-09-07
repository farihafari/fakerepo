<?php

$std = [
    "name"=>"hamza",
    "age"=>21,
    "email"=>"hamza@gmail.com",
    "city"=>"karachi"

];

foreach($std as $key =>  $item){
     echo  $key . " : " .$item ."<br>";
    // print_r($item);
}

?>