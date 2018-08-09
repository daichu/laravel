<?php
require_once ('function.php');
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
//echo "<pre>";
//print_r($result);
//echo "</pre>";
while ($postuser = $result-> fetch_assoc()){
    echo "<pre>";
    print_r($postuser);
    echo "</pre>";

}
?>