<?php
require_once '../../function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/bootstrap.min.js"></script>
    <title>login</title>
</head>
<body>
<div class="wapper">
    <div class="container">
        <h1>Process</h1>
        <?php
        if($_COOKIE['fullname']!= null){
            echo '<h3>Xin chao:' .$_COOKIE['fullname'].'</h3>';
            echo '<div style="font-size: 16px; padding: 10px;"><a href="../sanpham/index.php">xem sản phẩm</a></div>';
            echo '<div style="font-size: 16px; padding: 10px;"><a href="logout.php">Logout</a></div>';
//            echo "<pre>";
//            print_r($_COOKIE);
//            echo "</pre>";
            //setcookie('fullname');
        }
       else {
           if ($_POST['user'] && $_POST['pass']) {
               //    echo "<pre>";
               //    print_r($_POST);
               //    echo "</pre>";
               $username = $_POST['user'];
               $password = $_POST['pass'];
               $sql = "SELECT *FROM users";
               $result = $conn->query($sql);
//            echo "<pre>";
//            print_r($result);
//            echo "</pre>";
               //exit();
               while ($info_user = $result->fetch_assoc()) {
                   echo "<pre>";
                   print_r($info_user);
                   echo "</pre>";
                   if (($info_user['username'] == $username) && ($info_user['password'] == $password)) {
//                    echo "<pre>";
//                    print_r($username);
//                    echo "</pre>";
//                    echo "<pre>";
//                    print_r($password);
//                    echo "</pre>";
//                    echo "<pre>";
//                    print_r($_COOKIE);
//                    echo "</pre>";
//
                       setcookie('fullname', $info_user['fullname'], time() + 3600);
                       echo "<pre>";
                       print_r($_COOKIE);
                       echo "</pre>";
                       echo '<h3>Xin chao:' . $_COOKIE['fullname'] . '</h3>';
                       echo '<a href="logout.php">dang xuat</a>';
                       echo "Login success";
                       //setcookie('fullname');
                   }
                   else {
                       header("location: login.php");
                   }
               }

           } else {
               header("location: login.php");
           }
       }
        ?>
    </div>
</div>

</body>
</html>

