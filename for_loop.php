<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Table</title>
</head>
<body>
    
 <table class="table table-striped mt-5 P-5">
    <?php
    $num = 23;
    for($i= 1 ; $i<=13 ; $i++){
        
    ?>
    <tr>
        <td><?php echo $num?></td>
        <td><?php echo 'x'?></td>
        <td><?php echo $i ?></td>
        <td><?php echo '='?></td>
        <td><?php echo  $num*$i ?></td>
    </tr>
   <?php
    }
    ?>
 </table>
</body>
</html>


