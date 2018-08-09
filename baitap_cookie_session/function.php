<?php

// connect database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'baitap_session';

// tạo kết nối
$conn = new mysqli($servername,$username,$password,$dbname);
//  kiểm tra
if($conn->connect_error){
    die("connect not false:" .$conn->connect_error);

}
//else
//{
//    echo "kết nối thành công";
//}

?>