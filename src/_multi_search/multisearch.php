<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>人力资源管理系统</title>
<link rel="stylesheet" rev="stylesheet" href="../css/style.css " type="text/css" media="all" />
<link rel="stylesheet" rev="stylesheet" href="../css/style6.css " type="text/css" media="all" />
<link rel="stylesheet" href="../css/jquery-labelauty.css">
<script type="text/javascript" src="..Js/typem.js"></script>
<script type="text/javascript" src="..Js/js.js"></script>
<style type="text/css">
input[type = "checkbox"]{
    width: 16px;
    height: 16px;
    vertical-align: middle;
    border: 1px solid #D1D1D1;
}
ul { list-style-type: none;}
li { display: inline-block;}
li { margin: 10px 0;}
input.labelauty + label { font: 12px "Microsoft Yahei";}
</style>
</head>
<body class="ContentBody">
<form name="userForm" method="post" action="multiresult.php">
<div class="MainDiv">
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >智能化筛选</th>
  </tr>
  <tr>
    <td class="CPanel">
		<table width="90%" border="0" cellpadding="0" cellspacing="0" style="width:80%" align="center">

		<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>致敬未来</legend>

				<table width="100%" border="0" cellpadding="2" cellspacing="8" style="width:100%" align="center">
						
						<tr>
							<td nowrap align="left" width="9%">学历:</td>
							<td nowrap align="left">
							<ul class="dowebok">
							<li><input type="radio" name="degree" data-labelauty="博士" value="博士"></li>
							<li><input type="radio" name="degree" data-labelauty="硕士" value="硕士"></li>
							<li><input type="radio" name="degree" data-labelauty="本科" value="本科"></li>
							<li><input type="radio" name="degree" data-labelauty="专科" value="专科"></li>
							<li><input type="radio" name="degree" data-labelauty="其它" value="其它"></li>
							</ul>
							</td>
						</tr>
						<tr>
							<td nowrap align="left" width="9%">工作时龄：</td>
							<td nowrap align="left">
								<ul class="dowebok">
								<li><input type="radio" name="workage" data-labelauty="不限" value="不限"></li>
								<li><input type="radio" name="workage" data-labelauty="3年以下" value="0"></li>
								<li><input type="radio" name="workage" data-labelauty="3年及以上" value="3"></li>
								<li><input type="radio" name="workage" data-labelauty="5年及以上" value="5"></li>
								<li><input type="radio" name="workage" data-labelauty="8年及以上" value="8"></li>
								</ul>
							</td>
						</tr>

						<tr>
							<td nowrap align="left" width="9%">主观评价类型：</td>
						</tr>
								<table>
									<tr>
										<td>
											<input type="checkbox" name="keyword" data-labelauty="沟通能力强" value="沟通">
										</td>
										<td>
											<input type="checkbox" name="keyword" data-labelauty="合作能力强" value="合作">
										</td>
										<td>
											<input type="checkbox" name="keyword" data-labelauty="性格受欢迎" value="性格">
										</td>
									</tr>
									<tr>
										<td>
										<input type="checkbox" name="keyword" data-labelauty="技术能力强" value="技术">
										</td>
										<td>
										<input type="checkbox" name="keyword" data-labelauty="行业经验丰富" value="经验">
										</td>
										<td>
										<input type="checkbox" name="keyword" data-labelauty="工作态度好" value="态度">
										</td>
									</tr>
								</table>
				</table>
				</fieldset>
				</TD>
		</TR>
		</TABLE>
	 </td>
  </tr>

  <button class="button" style="positon:absolute;left:250px">
	Fancy Button
	<div class="button__horizontal"></div>
	<div class="button__vertical"></div>
  </button>

		</TABLE>
</div>
<script src="../Js/jquery-1.8.3.min.js"></script>
<script src="../Js/jquery-labelauty.js"></script>
<script>
$(function(){
	$(':input').labelauty();
});
</script>

</form>
</body>
</html>

