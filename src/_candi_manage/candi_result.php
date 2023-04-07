<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff";
session_start(); //声明变量
$number = isset($_SESSION['number']) ? $_SESSION['number'] : ""; 

$con=mysqli_connect($servername,$username,$password,$dbname);
// 检测连接
if (mysqli_connect_errno()){
    echo "连接失败: " . mysqli_connect_error();
}
else{
    $result = mysqli_query($con,"SELECT * FROM basic_information WHERE number=$number");
    $row = mysqli_fetch_array($result);    
}
?> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>小微企业管理系统</title>
<link rel="stylesheet" rev="stylesheet" href="../css/style.css" type="text/css" media="all" />
<style type="text/css">
<?php 
	error_reporting(E_ERROR); 
	ini_set("display_errors","Off");
?>
.table_left{text-align: left;
    padding: 6px 10px 6px 4px;
    font-weight: 800;
    font-size: 16px;
    color: #667E99;
    background-color: transparent;
    border-top: 1px dotted #D5E4F1;
    display: table-cell;
    width: 110px;
    vertical-align: middle;}
.table_right{text-align: middle;
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
#myCheck{
    background-color: white;
    border-radius: 5px;
    border:1px solid #d3d3d3;
    width:18px;
    height:18px;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    line-height: 20px;
}
.entry{font-size: 16px;
	font-weight:1000;
	color:#DC143C;
	padding-top:100px;
}

</style>
</head>
<body class="ContentBody">
    <form name="userForm" method="post" action="../mpdf_can.php">
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
			    <legend>详细信息</legend>
                            <table width="100%" border="0" cellpadding="2" cellspacing="1" style="width:100%">
				<tr>
					<td class="table_left">档案号：</td>
					<td class="table_right">
						<?php echo $row['number'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">	姓名：</td>
					<td class="table_right">
						<?php echo $row['name'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">身份证号：</td>
					<td class="table_right">
						<?php  echo substr_replace($row['ID'],"****",14,4);?>
					</td>
				</tr>
				<tr>
					<td class="table_left">性别：</td>
					<td class="table_right">
						<?php echo $row['sex'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">手机号：</td>
					<td class="table_right">
						<?php echo $row['tel'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">年龄：</td>
					<td class="table_right">
						<?php echo $row['age'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">学历：</td>
					<td class="table_right">
						<?php echo $row['degree'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">工龄：</td>
					<td class="table_right">
						<?php  echo $row['workage'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">职位：</td>
					<td class="table_right">
						<?php echo $row['job'];
						?>
					</td>
				</tr>
				<tr>
					<td class="table_left">企业：</td>
					<td class="table_right">
						<?php echo $row['corp'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">违纪情况：</td>
					<td class="table_right">
						<?php echo $row['outlaw'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">出勤率：</td>
					<td class="table_right">
						<?php echo $row['chuqin'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left">绩效：</td>
					<td class="table_right">
						<?php echo $row['jixiao'];?>
					</td>
				</tr>
				<tr>
					<td class="table_left"><font color=#7B68EE>综合评分:</font></td>
					<td class="table_right"><font color=#7B68EE>
					<?php
    //API产品路径
    $host = "http://aiemotion.market.alicloudapi.com";
    $path = "/icredit_ai_nlp/text_emotion/v1";
    $method = "POST";
    //阿里云APPCODE
    $appcode = "ddb84e8427e8425d8580e7d452912f80";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    //根据API的要求，定义相对应的Content-Type
    array_push($headers, "Content-Type".":"."application/x-www-form-urlencoded; charset=UTF-8");
    
    #文本数据，如：中国是一个伟大的国家，它拥有960万平方公里面积
    $STRING = "中国是一个伟大的国家，它拥有960万平方公里面积";
    $bodys = "STRING=".$STRING;

    $url = $host . $path;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($curl, CURLOPT_HEADER, true);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    curl_setopt($curl, CURLOPT_POSTFIELDS, $bodys);
    $T = curl_exec($curl);
	$pT=strstr($T,"TEXT_SENTIMENT_POSITIVE_SCORE");
	$sT=substr($pT,34,3);
    $sT1=substr($sT,0,1);
    $sT2=substr($sT,1);
	echo $sT1.".".$sT2;
?></font>
					</td>
				</tr>
				<tr>
                                        <td class="table_left"><font color=#7B68EE>参考薪资等级：</font></td>
					<td class="table_right"><font color=#7B68EE>
						<?php 						
                                                        if($row['job']=='ceo')$salaryjob=100;
							if($row['job']=='cfo')$salaryjob=80;
							else $salaryjob=40;
							$salarywa=1+(int)$row['workage']/10;
							if($row['degree']=='本科')$salaryd=1;
							if($row['degree']=='小学')$salaryd=0.3;
							if($row['degree']=='初中')$salaryd=0.5;
							if($row['degree']=='高中')$salaryd=0.7;
							if($row['degree']=='硕士')$salaryd=1.2;
							if($row['degree']=='博士')$salaryd=1.4;
							$salary=$salaryjob*$salarywa*$salaryd;
							echo $salary . "K";
						 ?>
					</td>
				</tr>
				<tr>
					<td><input type="checkbox" id="myCheck"><text class="entry">拟录用</text><br></td>
				</tr>
                            </table>
                            </fieldset>
			</TD>
		</TR>
            </TABLE>
	 </td>
  </tr>
<TR>
    <TD colspan="2" align="center" height="50px">
       <input name="mpdf" type="submit" class="button" value="导出PDF"/></TD>
    </TR>
</TABLE>
</div>
</form>
</body>
</html>