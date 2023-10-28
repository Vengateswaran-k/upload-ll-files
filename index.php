<?php 
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>captcha</title>
</head>
<?php 
if(isset($_POST['submit']))
{
     $image = $_FILES['image']['name'];
     $target = "uploads/".basename($image);
    $sql = mysqli_query($con,"INSERT INTO table_img(image) VALUES('$image')");

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
    {
        $msg = "Image uploaded successfully";
    }
    else
    {
        $msg = "There is problem";

    }

}




?>
<body>
<form  method="post" enctype="multipart/form-data">
   <input type="file" id="image" name="image"><br><br> 
<button  type="submit" id="submit" name="submit" >Submit</button>
</form>
</body>
</html>