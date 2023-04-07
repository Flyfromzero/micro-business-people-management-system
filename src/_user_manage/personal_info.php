<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff";

$con=mysqli_connect($servername,$username,$password,$dbname);
// 检测连接
if (mysqli_connect_errno()){
    echo "连接失败: " . mysqli_connect_error();
}

// $Id:$ //开启session
    session_start(); //声明变量
    $username = isset($_SESSION['user']) ? $_SESSION['user'] : ""; //判断session是否为空
    $company=isset($_SESSION['company']) ? $_SESSION['company']:"";
?> 

<style>
.left{background-color:#87CEFA;
	font-size:15px;
	padding-left:15px;
	padding-right:15px;
	padding-top: 20px;
	padding-bottom: 20px;}
.right{	align:right;
	font-size:15px;}
</style>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>人力资源管理系统</title>
<style type="text/css">
<!--
.atten {font-size:12px;font-weight:normal;color:#F00;}
-->
</style>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body class="ContentBody">
    <form name="userForm" method="post" action="../toPdf.php">
<div class="MainDiv">
<table width="99%" height="80%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >用户信息</th>
  </tr>
  <tr><td>	
          <div style="position:absolute;top:70px;left:100px;width:70%;">
                    <legend><a href="../news.php" style="font-size:16px;">返回</a></legend>
                    <table border="0" align="center" width="100%" style="text-align:center">
				<tr>
					<td class='left'>用户名</td>
                                        <td class='right' style="background-color:#ccffff" id="name" name="name">
						<?php 
						$result = mysqli_query($con,"SELECT * FROM user_information
						WHERE username='$username'");
						if($row = mysqli_fetch_array($result))
						{
						    echo $row['username'];
						}
						?>
					</td>
				</tr>
				<tr>
					<td class='left'>邮箱</td>
					<td class='right'style="background-color:#ccffff">
						<?php 
						$result = mysqli_query($con,"SELECT * FROM user_information
						WHERE username='$username'");
						if($row = mysqli_fetch_array($result))
						{
						    echo $row['email'];
						}
						?>
					</td>
				</tr>
				<tr>
					<td class='left'>联系方式</td>
					<td class='right'style="background-color:#ccffff">
						<?php 
						$result = mysqli_query($con,"SELECT * FROM user_information
						WHERE username='$username'");
						if($row = mysqli_fetch_array($result))
						{
						    echo $row['phone'];
						}
						?>
					</td>
				</tr>
				<tr>
					<td class='left'>公司</td>
                                        <td class='right'style="background-color:#ccffff">
						<?php 
                                                    $result = mysqli_query($con,"SELECT * FROM user_information
						WHERE username='$username'");
						if($row = mysqli_fetch_array($result))
						{
						    echo $row['company'];
						}
						?>
					</td>
				</tr>				
                    </table></div>
                <tr><td align="center" height="50px"><input name="Submit" type="submit" class="button" value="导出PDF"></td></tr>
</table>		
</div>    
</form>
</body>
</html>