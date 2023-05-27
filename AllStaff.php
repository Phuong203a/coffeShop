<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script>
  function searchTable() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("th");
      for (j = 0; j < td.length; j++) {
        if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
          found = true;
        }
      }
      if (found) {
        tr[i].style.display = "";
        found = false;
      } else {
        tr[i].style.display = "none";
      }
    }
  }
</script>
<style>
</style>
<nav class="navbar navbar-light" style="background-color:pink">
  <div class="container-fluid">
    <a href="AddStaff.php" width="40px">Logout
    </a>
    <a class="navbar-brand text-primary" href="AddStaff.php" style="font-family: 'Yeseva One', cursive;font-size:23px;">

      <i class="navbar-brand"></i></a>
    <form class="d-flex col-sm-5">
      <a href="AddStaff.php" class="btn btn-outline-primary text-dark col-sm-4 me-2" style="background-color: white">
        <i class="material-icons"><img src="../Coffe_shop/Image/Add_User_icon-icons.com_55971.png" width="20px"></i>
        <span> Add new student</span>
      </a>
      <input class="form-control me-2" type="search" placeholder="Search student" aria-label="Search" id="myInput">
      <button class="btn btn-outline-primary text-dark" style="background-color: white" type="button" onclick="searchTable()">Search</button>
    </form>
  </div>
</nav>

<body class="text-center" style="vertical-align: middle;">
  <table class="table table striped table-hover " id="myTable">
    <thead>
      <tr style="font-size: 20px; color: rgb(42, 58, 98);">
        <th>STT</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="text-center" style="vertical-align: middle;">
      <?php
      require "config.php";
      $sql = "select * from staff";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr >";
        echo "<th>" . $row['id'] . "</th>";
        echo "<th>" . $row['first_name'] . " " . $row['last_name'] . "</th>";
        echo "<th>" . $row['date_of_birth'] . "</th>";
        echo "<th>" . $row['email'] . "</th>";
        echo '<th>
              <a href="AddStaff.php" class="add" title="" data-toggle="tooltip" data-original-title="add"><i class="material-icons" style="margin:0px 20px;"><img src="../Coffe_shop/Image/Add_User_icon-icons.com_55971.png" style="margin: 10px;" width="20px">Edit</i></a>
        </th>
        </tr>';
      }
      ?>

  </table>
</body>

</html>