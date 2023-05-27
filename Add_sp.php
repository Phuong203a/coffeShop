<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thêm sản phẩm</title>
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
            padding: 15px;
        }

        tr:nth-child(even) {
            background-color: #fcd5d5;
        }

        img {
            width: 200px;
        }
    </style>
</head>
<script>
</script>


<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#ffdada">
    <a class="navbar-brand " href="#" style="font-size: 30px;">THÊM SẢN PHẨM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline" style="margin:0px 80%">
        <a class="btn btn-outline-success my-5 my-sm-3" href="../Coffe_shop/kho.html">Logout</a>
    </form>

</nav>

<body>
    <div class="container-xl px-1 mt-5">
        <hr class=" mb-3">
        <div>
            <div class="card-columns">
                <div class="card">
                    <div class="card-header p-4 mb-3" style="background-color:#ffdada "></div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputName">Tên sản phẩm</label>
                                    <input class="form-control" id="inputName" type="text">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputhinhanh">Hình ảnh</label>
                                    <input class="form-control" id="inputOrgName" type="file">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputPrice">Giá</label>
                                <input class="form-control" id="inputPrice" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputLocation">Nguyên liệu</label>
                                <button type="button" class="btn btn-success" id="btnModal">Thêm nguyên liệu</button>

                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputLocation">Khuyến mãi</label>
                                <button type="button" class="btn btn-success" id="btnKm">Thêm khuyến mãi</button>
                            </div>
                            <div><button type="button" class="btn btn-primary">Thêm</button></div>
                        </form>
                    </div>
                </div>
                <div style="text-align: center; margin: 100px;">
                    <div class="mb-3">
                        <form class="form-group">
                            <table border="">
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá</th>
                                    <th>Nguyên liệu</th>
                                    <th>Khuyến mại</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                <!-- <?php
                                        require "config.php";
                                        $sql = "select sp.id , sp.name ,sp.price ,nl.name as 'nguyen_lieu' ,km.name  as 'khuyen_mai' from san_pham sp ,
                                sanpham_nguyenlieu sn ,
                                nguyen_lieu nl ,
                                khuyen_mai km 
                                where sp.id =sn.san_pham_id 
                                and sn.nguyen_lieu_id =nl.id 
                                and sp.khuyen_mai_id =km.id 
                                group by sp.name ;";
                                        $result = mysqli_query($conn, $sql);
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($result)) {
                                            $sqlNguyenLieu = "select nl.name from nguyen_lieu nl, sanpham_nguyenlieu sn
                                    where nl.id =sn.nguyen_lieu_id 
                                    and sn.san_pham_id = " . $row['id'] . ";";
                                            $nguyenLieuResult = mysqli_query($conn, $sqlNguyenLieu);
                                            $nguyenLieu = '';
                                            while ($rowNguyenLieu = mysqli_fetch_array($nguyenLieuResult)) {
                                                $nguyenLieu = $nguyenLieu . ' ' . $rowNguyenLieu['name'];
                                            }
                                            echo "<tr >";
                                            echo "<td>" . ++$i . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td><img src='https://yokovietnam.com/wp-content/uploads/2019/03/nuoc-chanh-tuoi.jpg'>
                                    </td>";
                                            echo "<td>" . $row['price'] . "</td>";
                                            echo "<td>" . $nguyenLieu . "</td>";
                                            echo "<td>" . $row['khuyen_mai'] . "</td>";
                                            echo "<td><button type='button' class='btn btn-primary'>Sửa</button></td>
                                    <td><button type='button' class='btn btn-danger'>Xóa</button></td>";
                                            echo "</tr>";
                                        }
                                        ?> -->

                            </table>
                        </form>
                    </div>

                </div>

            </div>
            <div class="col text-center">
                <button type="button" class="btn btn-primary" style="margin-left: 20%;" onclick="saveSanPham()">Lưu</button>
            </div>
        </div>

    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
                <div class="modal-body" style="font-size:15px">
                    <table border="">
                        <tr>
                            <th>STT</th>
                            <th>Tên nguyên liệu</th>
                            <th>Số lượng</th>
                            <th>Hàng tồn</th>
                            <th>Đơn vị</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Đường</td>
                            <td><input type="text " style="width: 50px;"></input></td>
                            <td>2</td>
                            <td>kg</td>
                            <td><button type="button" class="btn btn-danger">Xóa</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Chanh</td>
                            <td><input type="text" style="width:50px;"></input></td>
                            <td>3</td>
                            <td>kg</td>
                            <td><button type="button" class="btn btn-danger">Xóa</button></td>
                        </tr>
                    </table>
                    <button type="button" class="btn btn-warning" style="margin: 10px 45%;">Lưu</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="myKm" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
                <div class="modal-body" style="font-size:15px">
                    <table border="">
                        <tr>
                            <th>STT</th>
                            <th>Tên khuyến mãi</th>
                            <th>Giá trị khuyến mãi</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>14/2</td>
                            <td>10% người không có người yêu</td>
                            <td><button type="button" class="btn btn-danger">Xóa</button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>14/2</td>
                            <td>50% cho cặp đôi</td>
                            <td><button type="button" class="btn btn-danger">Xóa</button></td>
                        </tr>
                    </table>
                    <button type="button" class="btn btn-warning" style="margin: 10px 45%;">Lưu</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>


        </div>
    </div>
    <script>
        function addSanPham(){

        }

        function saveSanPham() {
            var name = document.getElementById("inputName").value;
            var price = document.getElementById("inputPrice").value;
            $.ajax({
                method: "POST",
                url: "AddSpController.php",
                data: {
                    name: name,
                    price: price,
                },
                success: function(result) {
                    alert(result);
                    location.reload();
                },
            });
        }
        $(document).ready(function() {
            $("#btnModal").click(function() {
                $("#myModal").modal();
            });
        });
        $(document).ready(function() {
            $("#btnKm").click(function() {
                $("#myKm").modal();
            });
        });
    </script>

</body>


</html>