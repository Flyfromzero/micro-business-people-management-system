<?php 
	$number = isset($_POST['number']) ? $_POST['number'] : "";
	$conn = mysqli_connect('localhost', 'root', '', 'staff'); //准备SQL语句
		if(!$conn)   //数据库连接失败
			{  exit('数据库连接失败！！！');}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>人力资源管理系统</title>
<link rel="stylesheet" rev="stylesheet" href="../css/style.css " type="text/css" media="all" />
<style type="text/css">
<?php 
	error_reporting(E_ERROR); 
	ini_set("display_errors","Off");
?>
<!--
.atten {font-size:12px;font-weight:normal;color:#F00;}
-->
.table_left{
	text-align: left;
    padding: 6px 10px 6px 4px;
    font-weight: 800;
    font-size: 16px;
    color: #667E99;
    background-color: transparent;
    border-top: 1px dotted #D5E4F1;
    display: table-cell;
    width: 110px;
    vertical-align: middle;}
.table_right{
	text-align: middle;
    padding: 6px 10px 6px 4px;
    font-weight: 800;
    font-size: 14px;
    color: #696969;
    background-color: transparent;
    border-top: 1px dotted #D5E4F1;
    display: table-cell;
    width: 110px;
    vertical-align: middle;	
}
</style>
</head>
<body class="ContentBody">
<form name="userForm" method="post" action="asearch.php">
<div class="MainDiv">
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >精确查询结果</th>
  </tr>
  <tr>
    <td class="CPanel">
		<table width="90%" border="0" cellpadding="0" cellspacing="0" style="width:80%" align="center">
		<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>人员信息</legend>
				<table width="100%" border="0" cellpadding="2" cellspacing="1" style="width:100%">
					<tr>
						<td nowrap align="left" width="9%" class="table_left">员工姓名：</td>
						<td nowrap align="left" width="9%" class="table_right">
							<?php
								$sql_select = "SELECT name FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								if(!$row['name']){echo "<script language=javascript>alert('查无此人!');history.back();</script>";}
								echo $row['name'];
							?>
						</td> 
					</tr>
					<tr>
						<td nowrap align="left" width="12%" class="table_left">年龄:</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT age FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['age'];
							?>
						</td>
				    </tr>
					<tr>
						<td nowrap align="left" width="9%"class="table_left">性别：</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT sex FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['sex'];
							?>
						</td>
					<tr>
						<td  nowrap align="left" width="12%" class="table_left">最高学历:</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT degree FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['degree'];
							?>
						</td>
					</tr>
					<tr>
						<td nowrap align="left" width="9%"class="table_left">身份证号:</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT ID FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['ID'];
							?>
						</td>
					</tr>
					<tr>
						<td class="table_left">联系方式:</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT tel FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['tel'];
							?>
						</td>
					</tr>
					<tr>
						<td nowrap align="left" width="9%"class="table_left">工龄:</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT workage FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['workage'];
							?>
						</td>
					</tr>
					<tr>
						<td class="table_left">在职公司</td>
						<td class="table_right">
							<?php
								$sql_select = "SELECT corp FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['corp'];
							?>
						</td>
					</tr>
					<tr>
						<td nowrap align="left" width="9%"class="table_left">职位:</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT job FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['job'];
							?>
						</td>
					</tr>
					<tr>
						<td class="table_left">绩效:</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT jixiao FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['jixiao'];
							?>
						</td>
					</tr>
					<tr>
						<td nowrap align="left" width="9%"class="table_left">出勤情况:</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT chuqin FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['chuqin'];
							?>
						</td>
					</tr>
					<tr>
						<td class="table_left">违纪记录:</td>
						<td class="table_right">
							<?php 
								$sql_select = "SELECT outlaw FROM basic_information WHERE number = '$number'"; //执行SQL语句
								$ret = mysqli_query($conn, $sql_select);
								$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
								echo $row['outlaw'];
							?>
						</td>
					</tr>
					<tr>
						<td nowrap align="left" class="table_left">人员简介：</td>
						<td colspan="3">
						<textarea name="content1" cols="50" rows="6" class="input" id="content1" readonly placeholder="<?php 
						$username = isset($_SESSION['user']) ? $_SESSION['user'] : "";
						$password = isset($_SESSION['passwd']) ? $_SESSION['passwd'] : ""; 
						$conn = mysqli_connect('localhost', 'root', '', 'staff'); //准备SQL语句
							if(!$conn)   //数据库连接失败
								{  exit('数据库连接失败！！！');}
						 //数据库连接成功
							$sql_select = "SELECT rate FROM basic_information WHERE number = '$number'"; //执行SQL语句
							$ret = mysqli_query($conn, $sql_select);
							$row = mysqli_fetch_array($ret); //判断用户名或密码是否正确
							echo $row['rate'];
							mysqli_close($conn);  //关闭数据库
						?>"></textarea></td>
					</tr>
				</table>
			 		 <br/>
				</fieldset>
				</TD>
		</TR>
		</TABLE>
	 </td>
  </tr>
		<TR>
			<TD colspan="2" align="center" height="50px">
			<input name="重置" type="submit" class="button" value="返回"/></TD>
		</TR>
		</TABLE>
</div>
</form>
</body>
</html>