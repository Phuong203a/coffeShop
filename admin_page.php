<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="login_css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="AddStaff.php" class="btn">them nhan vien</a>
      <a href="khuyenmai.php" class="btn">khuyen mai</a>
      <a href="kho.php" class="btn">Kho</a>
      <a href="Add_sp.php" class="btn">Them san pham</a>
      <a href="AllStaff.php" class="btn">Danh sach nhan vien</a>
      <a href="Pay.php" class="btn">Danh sach nhan vien</a>
      <a href="logout.php" class="btn">logout</a>

   </div>

</div>

</body>
</html>