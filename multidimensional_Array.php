<?php

$students = 
[
    ["alisha",21,"karachi"],
   ["aqsa",22,"lahore","aqsa@gmail.com"],
   ["huzaifa",20,"karachi"],
    ["sana",18,"multan"]
];
// echo $students[0][0] . " " . $students[0][1] . 
// " " .$students[0][2] ;

               
for($i = 0 ;  $i<count($students); $i++){

    for($j=0; $j<count($students[$i]) ; $j++){
            echo $students[$i][$j] . " ";
    }
    echo "<br>";

}
?>