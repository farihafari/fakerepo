<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Select Data</title>
</head>
<body>
<div class="container">
<table class="table table-striped">  
    <tr>
        <th>name</th>
        <th>email</th>
        <th>salary</th>
        <th>city</th>
        <th>department</th>
        <th>Action</th>
    </tr>
<?php
$query = $pdo->query("select * from faculty");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// print_r($result);
foreach($result as $item){
    ?>
    <tr>
        <td><?php echo $item['name']?></td>
        <td><?php echo $item['email']?></td>
        <td><?php echo $item['salary']?></td>
        <td><?php echo $item['city']?></td>
        <td><?php echo $item['department']?></td>
        <td><button class="btn btn-info"><a class="text-light" href="update.php?id=<?php echo $item['id']?>">Update</a></button></td>
    </tr>
    <?php
}
?>
</table>
</div>

</body>
</html>