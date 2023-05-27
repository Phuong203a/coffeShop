<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Kho</title>
    <style>
        img {
            height: 200px;
            width: 343px;
        }
    </style>
</head>
<nav class="navbar navbar-light justify-content-between" style="background-color: pink;">
    <a href="../Coffe_shop/login_form.php" class="navbar-brand  ">Logout</a>
    <a href="../Coffe_shop/CoffeStore.html" class="btn btn-outline-danger">Home</a>
    <a href="../Coffe_shop/AllStaff.php" class="btn btn-outline-danger">Staff</a>
    <a href="../Coffe_shop/khuyenmai.html" class="btn btn-outline-danger">Sale</a>
    <a href="../Coffe_shop/giohang.html" class="btn btn-outline-danger">Pay</a>
    <a href="../Coffe_shop/Add_sp.html" class="btn btn-outline-danger">Add product</a>
    <form class="form-inline">
        <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-5 my-sm-3" type="submit">Search</button>
    </form>
</nav>
<button class="btn btn-danger" style="margin: 20px 43%; width: 200px; font-size: 30px;">WAREHOUSE</button>
<br>

<body>
    <div><button class="btn btn-warning" style="margin: 0px 20px;"> Thêm</button></div>
    <div class="container-xl" style="margin: 5%;">
        <div class="row">
            <?php
            require "config.php";
            $sql = "select * from nguyen_lieu";
            $result = mysqli_query($conn, $sql);
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-img-top"><img src="https://th.bing.com/th/id/OIP.fQYB01fW0nIT4LrnPDsJ7AAAAA?pid=ImgDet&rs=1"></div>
                        <div class="card-body">
                            <h4 class="card-title"><?=$row['name']?></h4>
                            <p class="card-text"><?=$row['description']?></p>
                            <th>Số lượng<br><input type="number" step="any" min="0" value="<?=$row['amount']?>"><br></th>
                            <th>Đơn vị<br><input type="text" value="<?=$row['unit']?>"><br></th>
                            <th>Giá tiền<br><input type="text" value="<?=$row['price']?>"><br></th>
                            </p>
                            <a href="#" class="btn btn-success">Thêm</a>
                            <a href="#" class="btn btn-primary">Sửa</a>
                            <a href="#" class="btn btn-danger">Xóa</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

        <div><button class="btn btn-warning" style="margin: 10px 700px;"> Lưu</button></div>
    </div>
    <script>

    </script>
</body>

</html>