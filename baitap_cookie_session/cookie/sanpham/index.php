

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

        <?php
        //echo "đay là trang index ssanr pham";
        require_once '../../function.php';
        $sql = "SELECT * FROM sanpham";
        $result = $conn->query($sql);
        while($post = $result->fetch_assoc()) { ?>
        <a href="product.php?id=<?php echo $post['id']; ?>">sản phẩm <?php  echo $post['id']; ?></a>
         <?php
        }
           ?>
        <h1>Các sản phẩm bạn đã xem:</h1>
        <?php
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";
        $sanpham_visited = unserialize($_COOKIE['sanpham']);
        $sanpham_visited = (array)$sanpham_visited;
        echo "<pre>";
        print_r($sanpham_visited);
        echo "</pre>";

        ?>
    </div>
</div>
</body>
</html>

