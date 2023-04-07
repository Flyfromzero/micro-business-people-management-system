<?php
error_reporting(E_ALL^E_NOTICE);
    require 'class.phpmailer.php';
    require 'class.smtp.php';
    $conn = mysqli_connect('localhost', 'root', '', 'staff'); //准备SQL语句
    if(!$conn)   //数据库连接失败
        {  exit('数据库连接失败！！！');}
 //数据库连接成功
     $email = isset($_POST['email']) ? $_POST['email'] : "";   
    $sql_check = "SELECT * FROM user_information WHERE email = '$email'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql_check);
    $row = mysqli_fetch_array($ret); //判断用户是否已存在
    if (empty($row['email']))
        echo "<script language=javascript>alert('用户不存在！');location.href='mail_login.php';</script>";  
    session_start(); //创建session
    $_SESSION['user'] = $row['username']; //声明全局变量
    $mail=new PHPMailer;
    $mail->IsSMTP();
    $mail->Host='smtp.qq.com';
    $mail->SMTPAuth = true;  //是否使用身份验证
    $mail->Username = '1711546733@qq.com'; // 发送方的邮箱账户
    $mail->Password='ouqhszkdmefnhejj';
    $mail->SMTPSecure = 'ssl'; // 使用ssl协议方式
    $mail->Port='465';
    $mail->SetFrom('1711546733@qq.com', "小可爱");
    //$mail->AddCC('1711546733@qq.com', "小可爱");
    $mail->addAddress($email);
    $code=rand(100000,999999);
    session_start();
    $_SESSION['code'] = $code;
    $mail->isHTML(true);
    $mail->Subject = '验证登录';
    $mail->Body = "这里是小微企业人才管理系统网站；<b>您的登录验证码是：</b>".$code;
    $status=$mail->Send();
    if($status) echo "<script language=javascript>alert('验证码已发送！');history.back();</script>";
    else echo "<script language=javascript>alert('发送失败！');history.back();</script>";
?>