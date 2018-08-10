<?php
require_once '../../function.php';
$id = $_GET['id'];
//echo $id;
$list = "sanpham" .$_GET['id'];
$sanpham_visited = unserialize($_COOKIE['sanpham']);
$sanpham_visited = (array)$sanpham_visited;
if(!in_array($list,$sanpham_visited)){
    $sanpham_visited[] = $list;
}
echo "<pre>";
print_r($sanpham_visited);
echo "</pre>";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
$sanphamcookie = serialize($sanpham_visited);
setcookie('sanpham',$sanphamcookie,time()+10);
echo "<h3><a href='index.php'>Quay lai</a> </h3>";

//$sql = "SELECT * FROM sanpham WHERE id =?";
//if(!empty($_GET['id'])) {
//    if ($stmt = $conn->prepare($sql)) {
//        $param_id = trim($_GET['id']);
//        $stmt->bind_param('i', $param_id);
//        if ($stmt->execute()) {
////            echo "thành công";
////            echo "<pre>";
////            print_r($stmt);
////            echo "</pre>";
//            $result = $stmt->get_result();
////            echo "<pre>";
////            print_r($result);
////            echo "</pre>";
//            if($result ->num_rows == 1){
//               $row = $result ->fetch_array(MYSQLI_ASSOC);
////               echo "<pre>";
////               print_r($row);
////               echo "</pre>";
//                 $id = $row['id'];
//                 $post_title = $row['post_title'];
//                 $post_content = $row['post_content'];
//                 $description = $row['description'];
//                 $author = $row['author'];
//
//            }
//            else{
//                echo "don't san pham";
//            }
//
//        } else {
//            echo "loi";
//        }
//        $conn->close();
//    }
//}
//
//else{
//    if(empty($_GET['id'])){
//        echo "id trống";
//    }
//}
//
////echo "sản phẩm";
////echo "<pre>";
////print_r($_GET);
////echo "</pre>";
//echo "san pham:".$id ."<BR>";
//echo "tieu de:".$post_title ."<BR>";
//echo "noi dung:".$post_content ."<BR>";
//echo "mieu ta:".$description ."<BR>";
//echo "tac gia:".$author ."<BR>";
//
//setcookie('sanpham',$id, time() +3600);
//echo "<pre>";
//print_r($_COOKIE);
//echo "</pre>";
//setcookie('sanpham');