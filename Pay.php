<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thanh toán</title>
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

        .boder2 {
            border-style: none;
        }
    </style>
</head>
<script>
</script>


<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#ffdada">
    <a class="navbar-brand col-1 btn btn-danger" href="../Coffe_shop/giohang.html">Logout</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <button class="btn btn-info" style="margin: 0px 80%;" onclick="window.print();"> In hóa đơn</button>
</nav>

<body>
    <div style="text-align: center; margin: 50px;">
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
                        <td>2</td>
                        <td>10000</td>

                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cà phê capuchino</td>
                        <td><img src="../../Coffe_shop/Image/CF_capuchino.jpg"></td>
                        <td>4</td>
                        <td>150000</td>
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
            <td> 1200000</td>
        </tr>
        <tr>
            <th colspan="2"> <button class="btn btn-primary" id="btnTt" style="font-size: 25px;"> Thanh toán</button></th>
        </tr>

    </table>
    <div class="modal fade" id="myTt" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Phương thức thanh toán</button>
                </div>
                <div class="modal-body">
                    <table border="">
                        <tr>
                            <th><button class="btn btn-outline-danger" id="btntttm">Tiền mặt</button></th>
                            <th><button class="btn btn-outline-danger"id="btntttt">Thẻ tín dụng</button></th>
                            <th><button class="btn btn-outline-danger" id="btnttmp">Máy pos</button></th>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="myTttt" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Thanh toán</button>
                </div>
                <div class="modal-body">     
                            <a class="text-danger" style="margin: 0px 25%;">Thanh toán thành công</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function printBill(){

        }
        $(document).ready(function () {
            $("#btnTt").click(function () {
                $("#myTt").modal();
            });
        });
        $(document).ready(function () {
            $("#btntttm").click(function () {
                $("#myTttt").modal();
            });
        });
        $(document).ready(function () {
            $("#btntttt").click(function () {
                $("#myTttt").modal();
            });
        });
        $(document).ready(function () {
            $("#btnttmp").click(function () {
                $("#myTttt").modal();
            });
        });
    </script>
</body>

</html>