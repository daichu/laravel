

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
    <div class="container-flud">
        <h1>Sản phẩm</h1>
        <a href="sanpham01.php">san pham 01</a>
        <a href="sanpham02.php">san pham 02</a>
        <h1>Các sản phẩm bạn đã xem:</h1>
        <?php
        $post = unserialize($_COOKIE['sanpham']);
        $post = (array)$post;
        echo "<pre>";
        print_r($post);
        echo "</pre>";
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";
        ?>
    </div>
</div>

</body>
</html>

