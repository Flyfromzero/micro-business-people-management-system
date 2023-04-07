<?php
// $Id:$ //开启session
    session_start(); //声明变量
    $username = isset($_SESSION['user']) ? $_SESSION['user'] : ""; //判断session是否为空
?> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>小微企业管理系统首页</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css">
<script src="Js/main.js" type="text/javascript"></script>
<script type="text/javascript" src="Js/jquery.min.js"></script>
</head>

<body>
<div>
<!-- 系统头部 -->
    <div style="width:100%;height: 50px;background-color:#438eb9;">
       <div class="small-title">
          <small>
            &emsp;&nbsp;小微企业管理系统
          </small>      
       </div>
       <div class="right-top">
            <li style="width:50%;border-left: 1px solid #fff;background-color: #62a8d1;"><?php 
                                                $week=array("日","一","二","三","四","五","六");
                                                echo date('Y-m-d')."&nbsp&nbsp星期".$week[date("w")]; ?>
            </li>            
            <iframe  class="weather" width="50%" scrolling="no" height="50" frameborder="1" allowtransparency="true" src="https://i.tianqi.com?c=code&id=5&color=%23FFFFFF&bgc=%2300B0F0&bdc=%2300B0F0&icon=1&site=17">                
            </iframe>
        </div>   
    </div>
<!-- 左边部分 -->
<table border="0" cellpadding="0" cellspacing="0" class="table1" style="background-color: #f5f5f5;">
<TD valign="top">
<!-- 头像栏 -->
        <table width="100%" border="0" cellpadding="0" cellspacing="0" >
            <tr>
			<td width="100%" height="55" background="images/nav01.gif" >
				<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
                                      <td  style="padding-left:8px" width="25%" rowspan="2"><img id="portrait" src="images/ico02.gif" width="53" height="53" onclick="var o=document.getElementById('file');o.click();"></td>
                                        <input style="display:none" type="file" id="file" onchange="showPreview(this)" accept="image/*">                                       
                                        <td width="75%" height="22" class="left-font01"><?php 
						date_default_timezone_set('PRC');
						$t=date("H");
						if ($t<"11"and $t>="0")
						{
							echo "&emsp;早上好,";
						}
						elseif ($t>="11"and $t<="13")
						{
							echo "&emsp;中午好,";
						}
						elseif ($t>"13"and $t<="18")
						{
							echo "&emsp;下午好,";
						}
						elseif ($t>"18"and $t<="23")
						{
							echo "&emsp;晚上好,";
						}
					?><span class="left-font02"><?php echo"$username" ?></span></td>
				  </tr>
				  <tr>
					<td height="22" class="left-font01">&emsp;[ &nbsp;<a href="login.php" target="_top" class="left-font01">退出</a>&nbsp; ]</td>  
				  </tr>
				</table>
			</td>
            </tr>
	</table>
<!-- 功能菜单栏 -->		
        <!-- 任务系统一：人员管理-->
	<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03"> 
          <tr>
            <td height="29">
		<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
			<td width="8%"><img name="img8" id="img8" src="images/ico04.gif" width="8" height="11" /></td>
			<td width="92%"><a href="javascript:void(0);" target="_self" class="left-font03" onClick="list('8')" >人员管理</a></td>
                    </tr>
		</table>
            </td>
          </tr>		  
        </TABLE>
                <!--人员管理子功能-->
		<table id="subtree8" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">				
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu2" src="images/ico06.gif" width="8" height="12" /></td>
                                  <td width="91%"><a href="_employee_manage/search.php" target="mainFrame" class="left-font03" onClick="tupian('2');">人员信息更新</a></td>
				</tr>
                </table>
	<!--  任务系统一结束    -->
                
        <!-- 任务系统二：招聘管理-->
        <TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
             <tr>
                 <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img7" id="img7" src="images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="_self" class="left-font03" onClick="list('7');" >招聘管理</a></td>
					</tr>
				</table>
                 </td>
            </tr>
        </TABLE>
                <!--招聘管理子功能-->
		<table id="subtree7" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu3" src="images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="_candi_manage/candi_search.php" target="mainFrame" class="left-font03" onClick="tupian('3');">应聘信息</a></td>
				</tr>
                </table>
        <!--  任务系统二结束   -->

	<!-- 任务系统三：综合查询-->
	<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03"> 
          <tr>
            <td height="29">
		<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
			<td width="8%"><img name="img1" id="img1" src="images/ico04.gif" width="8" height="11" /></td>
			<td width="92%"><a href="javascript:void(0);" target="_self" class="left-font03" onClick="list('1')" >综合查询</a></td>
                    </tr>
		</table>
            </td>
          </tr>		  
        </TABLE>
                <!--综合查询子功能-->
		<table id="subtree1" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu4" src="images/ico06.gif" width="8" height="12" /></td>
                                  <td width="91%"><a href="_multi_search/asearch.php"  target="mainFrame" class="left-font03" onClick="tupian('4');">精确查询</a></td>  
				</tr>
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu5" src="images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="_multi_search/multisearch.php" target="mainFrame" class="left-font03" onClick="tupian('5');">智能化筛选</a></td>
				</tr>
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu6" src="images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="_multi_search/search-jobless.php" target="mainFrame" class="left-font03" onClick="tupian('6');">失业员工查询</a></td>
				</tr>

        </table>
	<!--  任务系统三结束    -->
        
        <!-- 任务系统四：档案管理 开始 -->
	<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03"> 
          <tr>
            <td height="29">
		<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
			<td width="8%"><img name="img12" id="img12" src="images/ico04.gif" width="8" height="11" /></td>
			<td width="92%"><a href="javascript:void(0);" target="_self" class="left-font03" onClick="list('12')" >档案管理</a></td>
                    </tr>
		</table>
            </td>
          </tr>		  
        </TABLE>
                <!--档案管理子功能-->
		<table id="subtree12" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu7" src="images/ico06.gif" width="8" height="12" /></td>
                                  <td width="91%"><a href="_document_manage/cdocument.php"  target="mainFrame" class="left-font03" onClick="tupian('7');">档案建立</a></td>        
				</tr>
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu8" src="images/ico06.gif" width="8" height="12" /></td>
                                  <td width="91%"><a href="_document_manage/ddocument.php" target="mainFrame" class="left-font03" onClick="tupian('8');">档案删除</a></td>
				</tr>
                </table>
        <!--  任务系统四结束    -->

        <!-- 任务系统五：个人管理 开始 -->
	<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03"> 
          <tr>
            <td height="29">
		<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
			<td width="8%"><img name="img13" id="img13" src="images/ico04.gif" width="8" height="11" /></td>
			<td width="92%"><a href="javascript:void(0);" target="_self" class="left-font03" onClick="list('13')" >个人管理</a></td>
                    </tr>
		</table>
            </td>
          </tr>		  
        </TABLE>
                <!--个人信息管理子功能-->
		<table id="subtree13" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu9" src="images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="_user_manage/personal_info.php"  target="mainFrame" class="left-font03" onClick="tupian('9');">我的信息</a></td>                      
				</tr>
                </table>
        <!--  任务系统五结束    -->
</table>
</div>
    
<!-- 右边部分 -->
<div style="float:right" class="kkdiv">
    <!--  输出内容框架 -->
    <iframe  src="news.php" name="mainFrame" width="72%" height="100%" scrolling="YES" frameborder="1" id="mainFrame" style="border: 1.5px solid rgba(255,255,255, 0.75) ;background-size: cover;background-color: #f5f5f5"></iframe> 
    <div width="28%" height="auto"id="left"><video autoplay="" loop="" style="width: 80%;height: 70%;left:30px;top:10%;position: absolute;"src="images/0.mp4"/></div>
 </div>

<!-- 悬浮菜单 -->
<style type="text/css">
	body{
		position: relative;
		background: #EFF2F4;
		
	}
	body,div,ul,li,p,a,img{
		padding: 0;
		margin: 0;
	}
	/*右侧悬浮菜单*/
	.slide{
		width: 50px;
		height: 250px;
		position: fixed;
		top: 50%;
		margin-top: -126px;
		background: #018D75;
		right: 0;
		border-radius: 5px 0 0 5px;
		z-index: 999;
	}
	.slide ul{
		list-style: none;
	}
	.slide .icon li{
		width: 49px;
		height: 50px;
		background: url(images/icon.png) no-repeat;
	}
	.slide .icon .up{
		background-position:-330px -120px ;
	}
	.slide .icon li.qq{
		background-position:-385px -73px ;
	}
	.slide .icon li.tel{
		background-position:-385px -160px ;
	}
	.slide .icon li.wx{
		background-position:-385px -120px ;
	}
	.slide .icon li.down{
		background-position:-330px -160px ;
	}
	.slide .info{
		top: 50%;
		height: 147px;
		position: absolute;
		right: 100%;
		background: #018D75;
		width: 0px;
		overflow: hidden;
		margin-top: -73.5px;
		transition:0.5s;
		border-radius:4px 0 0 4px ;
	}
	.slide .info.hover{
		width: 145px;
		
	}
	.slide .info li{
		width: 145px;
		color: #CCCCCC;
		text-align: center;
	}
	.slide .info li p{
		font-size: 1.1em;
		line-height: 2em;
		padding: 15px;
		text-align: left;
	}
	.slide .info li.qq p a{
		display: block;
		margin-top: 12px;
		width: 100px;
		height: 32px;
		line-height: 32px;
		color: #00DFB9;
		font-size: 16px;   
		text-align: center;
		text-decoration: none;
		border: 1px solid #00DFB9;
		border-radius: 5px;
	}
	.slide .info li.qq p a:hover{
		color: #FFFFFF;
		border: none;
		background: #00E0DB;
	}
	.slide .info li div.img{
		height: 100%;
		background: #DEFFF9;
		margin: 15px;
	}
	.slide .info li div.img img{
		width: 100%;
		height: 100%;
	}
	/*控制菜单的按钮*/
	.index_cy{
		width: 30px;
		height: 30px;
		background: url(images/index_cy.png);
		position: fixed;
		right: 0;
		top: 50%;
		margin-top: 140px;
		background-position: 62px 0;
		cursor: pointer;
	}
	.index_cy2{
		width: 30px;
		height: 30px;
		background: url(images/index_cy.png);
		position: fixed;
		right: 0;
		top: 50%;
		margin-top: 140px;
		background-position: 30px 0;
		cursor: pointer;
	}
	
	/*自适应 当屏小于1050时隐藏*/
	@media screen and (max-width: 1050px) {
		.slide{
			display: none;
		}
		#btn{
			display: none;
		}
		
	}
</style>
<!--右侧悬浮菜单-->
<div class="slide">
	<ul class="icon">
		<li class="up" title="上一页"></li>
		<li class="qq"></li>
		<li class="tel"></li>
		<li class="wx"></li>
		<li class="down" title="下一页"></li>
	</ul>
	<ul class="info">
		<li class="qq">
			<p>在线沟通，请点我<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2592532554&amp;site=qq&amp;menu=yes" target="_blank">在线咨询</a></p>
		</li>
		<li class="tel">
			<p>咨询热线：<br>666-777-8888<br>客服qq：<br>2592532554</p>
		</li>
		<li class="wx">
                    <div class="img"><img src="images/1441956938.png" /></div>
		</li>
	</ul>
</div>
<div id="btn" class="index_cy"></div>
<script type="text/javascript">
$(function(){

	$('.slide .icon li').not('.up,.down').mouseenter(function(){
		$('.slide .info').addClass('hover');
		$('.slide .info li').hide();
		$('.slide .info li.'+$(this).attr('class')).show();//.slide .info li.qq
	});
	$('.slide').mouseleave(function(){
		$('.slide .info').removeClass('hover');
	});
	
	$('#btn').click(function(){
		$('.slide').toggle();
		if($(this).hasClass('index_cy')){
			$(this).removeClass('index_cy');
			$(this).addClass('index_cy2');
		}else{
			$(this).removeClass('index_cy2');
			$(this).addClass('index_cy');
		}
		
	});
	
});
</script>
</body>
</html>
