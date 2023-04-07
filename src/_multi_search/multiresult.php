<?php 
	$workage = isset($_POST['workage']) ? $_POST['workage'] : "";
	$corp = isset($_POST['corp']) ? $_POST['corp'] : "";
	$job = isset($_POST['job']) ? $_POST['job'] : ""; 
	$degree = isset($_POST['degree']) ? $_POST['degree'] : "";
	$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : "";
	$conn = mysqli_connect('localhost', 'root', '', 'staff'); //准备SQL语句
	if(!$conn)   //数据库连接失败
		{  exit('数据库连接失败！！！');}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>人力资源管理系统</title>
<link rel="stylesheet" rev="stylesheet" href="css/style.css " type="text/css" media="all" />
<script type="text/javascript" src="Js/typem.js"></script>
<script type="text/javascript" src="Js/js.js"></script>
<style type="text/css">
<?php 
	error_reporting(E_ERROR); 
	ini_set("display_errors","Off");
?>
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
<form name="userForm" method="post" action="multisearch.php">
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
						<td nowrap align="left" width="9%">
						<?php 
						 	$condition="Where ";
						 	if($degree=="不限")$ds="";
							elseif($degree=="本科"){
								$ds="degree IN('本科','硕士','博士')";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ds;
							}
							elseif($degree=="硕士"){
								$ds="degree IN('硕士','博士')";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ds;
							}
							elseif($degree=="博士"){
								$ds="degree IN('博士')";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ds;
							}
							elseif($degree=="专科"){
								$ds="degree IN('专科')";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ds;
							}
						
							if($job=="不限")$js="";
							elseif($job=="财务"){
								$js="job = '财务'";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$js;
							}
							elseif($job=="管理"){
								$js="job LIKE '%管理%'";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$js;
							}
							elseif($job=="技术"){
								$js="job LIKE '%开发%' OR job LIKE '%工程%' ";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$js;
							}
							elseif($job=="人事"){
								$js="job LIKE '%人事%'";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$js;
							}

							if($workage=="不限")$ws="";
							elseif($workage=="0"){
								$ws="workage <=3";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}
							elseif($workage=="3"){
								$ws="workage >=3";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}
							elseif($workage=="5"){
								$ws="workage >=5";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}
							elseif($workage=="8"){
								$ws="workage >=8";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}


							if($keyword=="沟通"){
								$ws="rate LIKE '%交流%' OR rate LIKE '%沟通%'";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}
							elseif($keyword=="技术"){
								$ws="rate LIKE '%技术%' OR rate LIKE '%专业%' OR rate LIKE '%能力%强%'";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}
							elseif($keyword=="合作"){
								$ws="rate LIKE '%合作%' OR rate LIKE '%协作%'";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}
							elseif($keyword=="性格"){
								$ws="rate LIKE '%性格%好%' OR rate LIKE '%欢迎%'";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}
							elseif($keyword=="经验"){
								$ws="rate LIKE '%经验%丰富%'";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}
							elseif($keyword=="态度"){
								$ws="rate LIKE '%工作%态度%' OR rate LIKE '%认真%' OR rate LIKE '%负责%'";if($condition!="Where ")$condition=$condition." And ";$condition=$condition.$ws;
							}

								
							echo "<script language=javascript>alert('$condition');</script>";
							if($condition==="Where ")$condition="";
							$sql_select = "SELECT * FROM `basic_information` ".$condition;
							$ret = mysqli_query($conn, $sql_select);
							$row = mysqli_fetch_array($ret);

							
							require '../vendor/autoload.php';
							use PhpOffice\PhpSpreadsheet\Spreadsheet;
							use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
							$spreadsheet = new Spreadsheet();
							$sheet = $spreadsheet->getActiveSheet();
							$sheet->setCellValue('A1', '员工姓名');
							$sheet->setCellValue('B1', '性别');
							$sheet->setCellValue('C1', '联系方式');
							$sheet->setCellValue('D1', '年龄');
							$sheet->setCellValue('E1', '学历');
							$sheet->setCellValue('F1', '工龄');
							$sheet->setCellValue('G1', '职位');
							$sheet->setCellValue('H1', '在职公司');
							$sheet->setCellValue('I1', '违纪记录');
							$sheet->setCellValue('J1', '出勤记录');
							$sheet->setCellValue('K1', '绩效');
							echo '<table border="1">';
							echo "<tr>";
							echo "<td>"."员工姓名"."</td><td>"."性别"."</td><td>"."联系方式"."</td><td>"."年龄"."</td><td>"."学历"."</td><td>"."工龄"."</td><td>"."职位"."</td><td>"."在职公司"."</td><td>"."违纪记录"."</td><td>"."出勤记录"."</td><td>"."绩效"."</td>";
							echo "</tr>";							
							echo "<tr>";
							
							echo "<td>".$row['name']."</td><td>".$row['sex']."</td><td>".$row['tel']."</td><td>".$row['age']."</td><td>".$row['degree']."</td><td>".$row['workage']."</td><td>".$row['job']."</td><td>".$row['corp']."</td><td>".$row['outlaw']."</td><td>".$row['chuqin']."</td><td>".$row['jixiao']."</td>";
							echo "</tr>";
							$num=2;
							$sheet->setCellValue('A'.$num, $row['name']);
							$sheet->setCellValue('B'.$num, $row['sex']);
							$sheet->setCellValue('C'.$num, $row['tel']);
							$sheet->setCellValue('D'.$num, $row['age']);
							$sheet->setCellValue('E'.$num, $row['degree']);
							$sheet->setCellValue('F'.$num, $row['workage']);
							$sheet->setCellValue('G'.$num, $row['job']);
							$sheet->setCellValue('H'.$num, $row['corp']);
							$sheet->setCellValue('I'.$num, $row['outlaw']);
							$sheet->setCellValue('J'.$num, $row['chuqin']);
							$sheet->setCellValue('K'.$num, $row['jixiao']);
							while($row=mysqli_fetch_assoc($ret)){
								$num=$num+1;
								echo "<tr>";
								echo "<td>".$row['name']."</td><td>".$row['sex']."</td><td>".$row['tel']."</td><td>".$row['age']."</td><td>".$row['degree']."</td><td>".$row['workage']."</td><td>".$row['job']."</td><td>".$row['corp']."</td><td>".$row['outlaw']."</td><td>".$row['chuqin']."</td><td>".$row['jixiao']."</td>";
								echo "</tr>";
								$sheet->setCellValue('A'.$num, $row['name']);
								$sheet->setCellValue('B'.$num, $row['sex']);
								$sheet->setCellValue('C'.$num, $row['tel']);
								$sheet->setCellValue('D'.$num, $row['age']);
								$sheet->setCellValue('E'.$num, $row['degree']);
								$sheet->setCellValue('F'.$num, $row['workage']);
								$sheet->setCellValue('G'.$num, $row['job']);
								$sheet->setCellValue('H'.$num, $row['corp']);
								$sheet->setCellValue('I'.$num, $row['outlaw']);
								$sheet->setCellValue('J'.$num, $row['chuqin']);
								$sheet->setCellValue('K'.$num, $row['jixiao']);
							}
							echo '</table>';
							
						?>
						</td> 
						
				    </tr>
				</table>
			 		 <br />
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