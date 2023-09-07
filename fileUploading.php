<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>File Uploading</title>
</head>
<body>
    <div class="container mt-5">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="cat_name">
      </div>
      <div class="form-group">
        <label for="">Choose Image</label>
        <input type="file" name="cat_file" class="form-control" name="cat_name">
      </div>
      <button type="submit" name="file_Upload" class="btn btn-info">insert Data</button>
    </form>
</div>
<?php
if(isset($_POST['file_Upload'])){
    $c_name = $_POST['cat_name'];
    $fileName = $_FILES['cat_file']['name'];
    $fileTmpName = $_FILES['cat_file']['tmp_name'];
    $fileSize = $_FILES['cat_file']['size'];
    $extension = pathinfo($fileName,PATHINFO_EXTENSION);
    $destination = "images/".$fileName ;
    if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
        // echo $extension
            if(move_uploaded_file($fileTmpName,$destination)){
                
                $query = $pdo->prepare("insert into cat (name, image) values (:name , :image)");
                $query->bindParam('name',$c_name);
                $query->bindParam('image',$fileName);
                $query->execute();
                echo "<script>alert('File Uploaded')</script>";
            }
    }
    else{
        echo "<script>alert('extension not matched')</script>";
    }
}

?>
</body>
</html>