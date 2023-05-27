<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khuyến mãi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

        .boder2 {
            border-style: none;
        }
    </style>
</head>
<script>
</script>


<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#ffdada">
    <a class="navbar-brand col-3 text-danger" href="../Coffe_shop/kho.html">Logout</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form>
        <h1 style="text-align: center;margin: 30px 300px;" class="text-danger">SALE</h1>
    </form>
</nav>

<body>
    <div style="text-align: center; margin: 50px;">
        <div class="mb-3">
            <form class="form-group">
                <table border="">
                    <tr>
                        <th>STT</th>
                        <th>Khuyến mãi</th>
                        <th>Số lượng</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Giá trị</th>
                        <th></th>
                    </tr>
                    <?php
                    require "config.php";
                    $sql = "select * from khuyen_mai";
                    $result = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr >";
                        echo "<td>" . ++$i . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td><input type='date' value=" . $row['start_time'] . "></td>";
                        echo "<td><input type='date' value=" . $row['end_time'] . "></td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td><button class='btn btn-warning'>Sửa</button>
                        <button class='btn btn-danger'>Xóa</button>
                    </td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </form>
        </div>
    </div>
    </div>
    </div>

    </div>
    <table class="boder2">
        <tr>
            <th colspan="2"> <button class="btn btn-success">Thêm</button></th>
            <th colspan="2"> <button class="btn btn-primary">Lưu</button></th>
        </tr>

        <table>
            </div>
</body>


</html>