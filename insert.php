<?php
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Insert</title>
</head>
<body>
    <div class="container mt-5">
    <form action="" method="post">

    <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">

    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">

    </div>
    <div class="form-group">
      <label for="">City</label>
      <input type="text" name="city" id="" class="form-control" placeholder="" aria-describedby="helpId">

    </div>
    <div class="form-group">
      <label for="">salary</label>
      <input type="text" name="salary" id="" class="form-control" placeholder="" aria-describedby="helpId">

    </div>
    <div class="form-group">
      <label for="">department</label>
      <input type="text" name="department" id="" class="form-control" placeholder="" aria-describedby="helpId">

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
   <button type="submit" class="btn btn-info" name="insert">Insert</button> 
    </form>
    </div>
    <?php
      if(isset($_POST['insert'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $salary = $_POST['salary'];
        $sub_id = $_POST['sub_id'];
        $department = $_POST['department'];
        $query = $pdo->prepare("insert into faculty(name,email,city,salary,subject_id,department) values (:f_name,:f_email,:f_city,:f_salary,:f_sub_id,:f_department)");
        $query->bindParam('f_name', $name);
        $query->bindParam('f_email', $email);
        $query->bindParam('f_city', $city);
        $query->bindParam('f_salary', $salary);
        $query->bindParam('f_sub_id', $sub_id);
        $query->bindParam('f_department', $department);
        $query->execute();
        echo "<script>alert('data inserted successfully')</script>";

      }

    ?>
</body>
</html>
