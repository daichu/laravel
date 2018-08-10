<?php
require_once '../../function.php';
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

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
        <h1>Login</h1>
        <?php
        ?>
        <form class="form-group" method="post" action="process.php">
            <table>
                <tr>
                    <td>Account:</td>
                    <td> <input type="text" name="user" placeholder="nhập tên" value="<?php if(isset($_SESSION['user'])){
                        echo $_SESSION['user'];
                        } ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td> <input type="password" name="pass" placeholder="nhập pass"  value="<?php if(isset($_SESSION['pass'])){
                            echo $_SESSION['pass'];
                        } ?>" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center; padding: 10px"><input type="submit" name="submit" class="alert-success alert-info" value="Login"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

</body>
</html>

