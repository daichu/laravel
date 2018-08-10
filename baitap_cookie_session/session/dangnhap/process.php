<?php
require_once '../../function.php';
//echo "kết nối thàn công";
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
//            echo "<pre>";
//            print_r($_POST);
//            echo "</pre>";
            session_start();
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            if(isset($_SESSION['fullname'])){
                if($_SESSION['timeout'] + 20 > time()){
                    echo "<h3 style='text-align: center;'>hôm nay là :" .date('Y/m/d'). "</h3>";
                    echo "<h3 style='text-align: center;'><a href='logout.php'> đăng xuất</a></h3>";
                }
                else
                {
                    session_unset();
                    header("location: login.php");
                }
            }
            else {
                if (!empty($_POST['user']) && !empty($_POST['pass'])) {
                    $user_name = $_POST['user'];
                    $user_pass = md5($_POST['pass']);
                    $k = 0;
                    while ($info_user = $result->fetch_assoc()) {
                        if ($info_user['username'] == $user_name && $info_user['password'] == $user_pass) {
                            $_SESSION['user'] = $user_name;
                            $_SESSION['pass'] = $user_pass;
                            $_SESSION['fullname'] = $info_user['fullname'];
                            //$_SESSION['flag'] == false;
                            $_SESSION['timeout'] = time();
                            $k = $k + 1;
                            //echo "đã tới session";
                            // session_unset();
                        } else {
                            $k = $k + 0;
                            header("location: login.php");
                        }

                    }
                    if ($k != 0) {
                        header("location: process.php");
                    } else {
                        header("location: login.php");
                    }
                }
                else
                {
                    header("location: login.php");
                }
                echo "<pre>";
                print_r($_SESSION);
                echo "</pre>";
            }
        ?>
        <h1 style="text-align: center">chào bạn: <?php echo $_SESSION['user']; ?></h1>
        <h1 style="text-align: center">Tên đầy đủ: <?php echo $_SESSION['fullname']; ?></h1>
    </div>
</div>

</body>
</html>

