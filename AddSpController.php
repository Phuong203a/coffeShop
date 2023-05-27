<?php
require "config.php";
try {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['price'];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    
    $sql = "insert into san_pham
        (name, image, price, khuyen_mai_id) 
        VALUES ('$name' ,'123123','$price', 1)";
    $result = $conn->query($sql);
    $returnIdSP = $conn->insert_id;
    
    $sql = "insert into sanpham_nguyenlieu
    (san_pham_id, nguyen_lieu_id, amount) 
    VALUES ('$returnIdSP' ,1,0.01)";
    $conn->query($sql);
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
