<?php
//setcookie('fullname');
setcookie('fullname', $info_user['fullname'], time() - 3600);
header("location: login.php");
