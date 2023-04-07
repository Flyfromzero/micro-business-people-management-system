<?php
// $Id:$ //声明变量
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
$re_password = isset($_POST['re_password']) ? $_POST['re_password'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$phone = isset($_POST['phone']) ? $_POST['phone'] : "";
$company = isset($_POST['company']) ? $_POST['company'] : "";
if ($password == $re_password) { //建立连接
    $conn = mysqli_connect("localhost", "root", "", "staff"); //准备SQL语句,查询用户名
    $sql_select = "SELECT username FROM user_information WHERE username = '$username'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($ret); //判断用户名是否已存在
    if ($username == $row['username']) { //用户名已存在，显示提示信息
        header("Location:register.php?err=1");
    } else { //用户名不存在，插入数据 //准备SQL语句
        $sql_insert = "INSERT INTO user_information(username,password,email,phone,company) 
VALUES('$username','$password','$email','$phone','$company')"; //执行SQL语句
        mysqli_query($conn, $sql_insert);
        header("Location:register.php?err=3");
    } //关闭数据库
    mysqli_close($conn);
} else {
    header("Location:register.php?err=2");
} ?>
