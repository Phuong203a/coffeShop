<!DOCTYPE html>
<html lang="en">

<head>
    <title>giỏ hàng</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: arial, sans-serif;
            font-size: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #ffdada;
            text-align: center;
            padding: 8px;
        }

        img {
            width: 200px;
        }

        .boder2{
            border-style: none;
        }
    </style>
</head>
<script>
</script>


<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#ffdada">
    <a class="navbar-brand col-1 btn btn-info" href="logout.php">Logout</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div>
    <form class="form-inline" >
        <button class="btn btn-danger my-5 my-sm-3"style="margin: 0px 200%; font-size:30px">SHOPPING CARD</button>
    </form>
</nav>

<body>
    <div style="text-align: center; margin: 10px;">
        <div class="mb-3">
            <form class="form-group">
                <table border="">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nước chanh</td>
                        <td><img src="https://yokovietnam.com/wp-content/uploads/2019/03/nuoc-chanh-tuoi.jpg"></td>
                        <td><input type="number"></td>
                        <td>100000</td>
                        <td><button class="btn-danger">Xóa</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cà phê capuchino</td>
                        <td><img src="../Coffe_shop/Image/CF_capuchino.jpg"></td>
                        <td><input type="number"></td>
                        <td>150000</td>
                        <td><button class="btn-danger">Xóa</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    </div>
    </div>

    </div>
    <table class="boder2">
        <tr>
            <th>Tổng tiền</th><br>
            <td> 30000</td>
        </tr>
        <table>
                <a href="Pay.php"class="btn btn-primary" style="margin: 50px 50%; font-size: 25px;"> Đặt đơn</a>
    
</body>


</html>