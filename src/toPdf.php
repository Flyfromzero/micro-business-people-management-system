<?php
error_reporting(E_ALL^E_NOTICE);
$conn = mysqli_connect('localhost', 'root', '', 'staff');
session_start(); //声明变量
$username = isset($_SESSION['user']) ? $_SESSION['user'] : "";
$result = mysqli_query($conn,"SELECT * FROM user_information WHERE username='$username'");
$row = mysqli_fetch_array($result);
$name=$username;
$email=$row['email'];
$tel=$row['phone'];
$company=$row['company'];
echo $name;

require_once __DIR__ . '/vendors/autoload.php';

$mpdf = new \Mpdf\Mpdf(['zh-CN','A4','','宋体',12,12,12,12]);
$mpdf->useAdobeCJK=TRUE;
$mpdf ->autoScriptToLang = true;
$mpdf -> autoLangToFont = true;
$mpdf->WriteHTML('<h2 align="center">用户信息表</h2><table width="70%" height="200px" align="center" border="1"><tr><td>用户名:</td><td>'.$name.'</td></tr>'
        . '<tr><td>邮箱:</td><td>'.$email.'</td></tr>'
        . '<tr><td>联系方式:</td><td>'.$tel.'</td></tr>'
        . '<tr><td>公司:</td><td>'.$company.'</td></tr></table>');
$mpdf->Output();
 
?>

