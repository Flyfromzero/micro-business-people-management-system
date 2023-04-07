<?php
error_reporting(E_ALL^E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff";
$number = $_POST['employee_number'];

$conn=mysqli_connect($servername,$username,$password,$dbname);
// 检测连接
if (mysqli_connect_errno()){
    echo "连接失败: " . mysqli_connect_error();
}
else{
    $result = mysqli_query($conn,"SELECT * FROM basic_information WHERE number=$number");
    $row = mysqli_fetch_array($result);
    if($row['number']!=$number) {echo "<script language=javascript>alert('人员档案不存在！');location.href='candi_search.php';</script>";mysqli_close($conn);}
    else{
    if($row['corp']!=null)  {echo "<script language=javascript>alert('应聘人员不存在！');location.href='candi_search.php';</script>";mysqli_close($conn);}
    session_start(); //创建session
    $_SESSION['number'] = $number; //声明全局变量
}}
?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>人力资源管理系统</title>
<link rel="stylesheet" rev="stylesheet" href="../css/style.css " type="text/css" media="all" />
<style type="text/css">
<!--
.atten {font-size:12px;font-weight:normal;color:#F00;}
-->

table{
width:100%;
border-style:solid;
border-width:1px;
border-color:#B0C4DE;
}
th{
border-width:0px;
font-size: 19px;
background-color:#E0FFFF;
}
td{
width:20px;
border:0px;
border-top: 5px;
font-size:15px;
font-weight: 500; 
}

</style>
</head>

<body class="ContentBody">
    <form name="userForm" method="post" action="../_candi_manage/candi_search.php">
<div class="MainDiv">
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >员工档案</th>
  </tr>
  <tr>
    <td class="CPanel">		
		<table width="90%" border="0" cellpadding="0" cellspacing="0" style="width:100%" align="center">
		<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>人员信息</legend>
				<table width="100%" border="0" cellpadding="2" cellspacing="1" style="width:100%">
					<tr>
                                            <td nowrap align="left" width="9%">						
                                            <table align="center" border="2" width="800">
						<tr>
						<th>姓名</th><th>身份证号</th><th>性 别</th><th>手机号</th><th>年 龄</th><th>学历</th><th>详细信息</th>
						</tr>						
						 <tr align="center">
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo substr_replace($row['ID'],"****",14,4);?></td>
                                                    <td><?php echo $row['sex'];?></td>
                                                    <td><?php echo $row['tel'];?></td>
                                                    <td><?php echo $row['age'];?></td>
                                                    <td><?php echo $row['degree'];?></td>
                                                    <td><a href=candi_result.php>查看</a></td>
						 </tr>						
                                            </table>						
                                            </td> 
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
            <a href="../news.php">返回</a>
        </td>
  </TR>
  </TABLE>
</div>
</form>
</body>
</html>