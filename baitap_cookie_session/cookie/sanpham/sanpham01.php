<?php
//echo "đay là trang index ssanr pham";
require_once '../../function.php';
$sql = "SELECT * FROM sanpham where id = 1";
$result = $conn->query($sql);
$post = unserialize($_COOKIE['sanpham']);
$post = (array)$post;
echo "<pre>";
print_r($post);
echo "</pre>";
while($post = $result->fetch_assoc()) {
    echo "tiêu đề: " . $post['post_title'];
    echo "<pre>";
    print_r($post);
    echo "</pre>";

    $post = serialize($post);
    setcookie('sanpham', $post, time() + 3600);

    /*    echo '<a href="<?php ?>"><br>'.$post["post_title"] .'<br></a>';*/
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

}
echo "Gía trị cookie là:" . "<br>" .$_COOKIE['sanpham'] ."<BR>" ;

//setcookie('sanpham',$post,time()-3600);



