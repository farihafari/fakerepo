<?php
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Update</title>
</head>
<body>

<?php
if(isset($_GET['id'])){
    $f_id = $_GET['id'];
    $query = $pdo->prepare("select * from faculty where id  = :id ");
    $query->bindParam('id',$f_id);
    $query->execute();
    $res = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($res);

?>
    <div class="container mt-5">
    <form action="" method="post">

    <div class="form-group">
      <label for="">Name</label>
      <input type="text" value="<?php echo $res['name']?>" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">

    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" value="<?php echo $res['email']?>"  id="" class="form-control" placeholder="" aria-describedby="helpId">

    </div>
    <div class="form-group">
      <label for="">City</label>
      <input type="text" name="city" id="" value="<?php echo $res['city']?>"  class="form-control" placeholder="" aria-describedby="helpId">

    </div>
    <div class="form-group">
      <label for="">salary</label>
      <input type="text" name="salary" value="<?php echo $res['salary']?>"   id="" class="form-control" placeholder="" aria-describedby="helpId">

    </div>
    <div class="form-group">
      <label for="">department</label>
      <input type="text" name="department" value="<?php echo $res['department']?>"  id="" class="form-control" placeholder="" aria-describedby="helpId">

    </div>
   <div class="form-group">
     <label for="">Subject</label>
     <select class="form-control" name="sub_id" id="">
        <option >select subject</option>
        <?php 
        $query = $pdo->query("select * from subject");
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($res as $sub){
        ?>
       <option value="<?php echo $sub['id']?>"><?php echo $sub['name']?></option>
  <?php
}
  ?>
     </select>
   </div>
   <button type="submit" class="btn btn-info" name="update">Update</button> 
    </form>
    </div>
   <?php
}

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $salary = $_POST['salary'];
    $department = $_POST['department'];
    $sub_id = $_POST['sub_id'];
    
    $query = $pdo->prepare("update faculty set name = :name , email = :email , city = :city , department = :dept , salary = :salary , subject_id = :sub_id where id = :id ");
    $query-> bindParam('name',$name);
    $query-> bindParam('email',$email);
    $query-> bindParam('city',$city);
    $query-> bindParam('dept',$department);
    $query-> bindParam('salary',$salary);
    $query-> bindParam('sub_id',$sub_id);
    $query->bindParam('id',$f_id);
    $query->execute();
    echo "<script>alert('updated successfully')</script>";
}
   ?>
    
</body>
</html>
