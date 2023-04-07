<?php
// $Id:$ //声明变量
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
if (!empty($username) && !empty($password)) { //建立连接   
    $conn = mysqli_connect('localhost', 'root', '', 'staff'); //准备SQL语句
    if(!$conn)   //数据库连接失败
        {  exit('数据库连接失败！！！');}
 //数据库连接成功
    $sql_select = "SELECT username,password FROM user_information WHERE username = '$username' AND password = '$password'"; //执行SQL语句
    $result1 = "SELECT company FROM user_information WHERE username = '$username' AND password = '$password'";
    $ret = mysqli_query($conn, $sql_select);
    $result2 = mysqli_query($conn, $result1);
    $row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
    $row2 = mysqli_fetch_array($result2);
    if ($username == $row['username'] && $password == $row['password']) 
    { 
        session_start(); //创建session
        $_SESSION['user'] = $username; //声明全局变量
        $_SESSION['company']=$row2['company'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('Y-m-d H:m:s');
        $info = sprintf("当前访问用户：%s,IP地址：%s,时间：%s /n", $username, $ip, $date);
        $sql_logs = "INSERT INTO logs(username,ip,date) VALUES('$username','$ip','$date')";
        //日志写入文件，如实现此功能，需要创建文件目录logs
        $f = fopen('./logs/' . date('Ymd') . '.log', 'a+');
        fwrite($f, $info);
        fclose($f);
        header("Location:load.php");
        mysqli_close($conn);  //关闭数据库
    }
    else 
    { //用户名或密码错误
        echo "<script language=javascript>alert('密码错误！');history.back();</script>";
    }
} else { //用户名或密码为空
    echo "<script language=javascript>alert('用户名或密码为空！');history.back();</script>";
} ?>
