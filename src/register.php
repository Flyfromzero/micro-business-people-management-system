<html>
<head><title>用户注册</title>
<meta name="content-type"; charset="UTF-8">
</head>
<style>
body{
  margin:0px;
  width:100%;
  min-width:1000px;
  max-width:100%;
  height:100%;
  background-color:#F0F0F0;
}
#head{
  background-color:#FFFF00;
  width:100%;
  height:100px;
}
#center{
  background-color:#00FFFF;
  width:100%;
  min-height:100%;
}
#foot{
  background-color:#FF00FF;
  width:100%;
  height:100px;
}
#animation {
-webkit-animation:fadeInLeft 1.5s .2s ease both;
-moz-animation:fadeInLeft 1.5s .2s ease both;
}
@-webkit-keyframes fadeInLeft {
0% {
opacity:0;
-webkit-transform:translateX(-50px)
}
100% {
opacity:1;
-webkit-transform:translateX(0)
}
}
@-moz-keyframes fadeInLeft {
 0% {
opacity:0;
-moz-transform:translateX(-20px)
}
100% {
opacity:1;
-moz-transform:translateX(0)
}}

</style>
<body style="overflow: initial;">
    <link href="css/register.css" rel="stylesheet" type="text/css" />
<div class="content"> 
 <div class="video"><video class="video" src="https://img.miaotranslation.com/client%2Fweb%2Fvideo%2Flogin.1280.mp4" autoplay="" loop=""></video> </div>
 <div id="animation">                                 
                <nav>                    
                    <li class="nav-cell special"><font style="font-family:宋体">&emsp;小微企业管理平台</font></li>
                    <li class="nav-cell"><font style="font-family:宋体"><a href="" style="color:white">产品简介</a></li>
                    <li class="nav-cell "><font style="font-family:宋体"><a href="" style="color:white">帮助文档</a></font></li>
                    <li class="nav-cell "><font style="font-family:宋体"><a href="" style="color:white">联系我们</a></font></li>
                    <li class="nav-cell "><font style="font-family:宋体"><a href="https://www.zhipin.com/" style="color:white">我要兼职</a></font></li>
                    <li class="nav-cell"><font style="font-family:宋体"><a href="http://www.jingoal.com/index.html" style="color:white">企业中台</a></font></li>
                    <li class="nav-cell"><font style="font-family:宋体"><a>QQ交流群：938312499</a></font></li>                              
                </nav>                                
 </div>
 <h1 align="center"> <span><font style="font-family: 宋体;color:#6699ff">注册</font></span></h1>
 <div class="center" align="center" id="animation">    
 <form action="registeraction.php" method="post"> <table border="0">    
        <div class="ant-form-item-control" >
            <span class="ant-form-item-children" >
                <input   style="background-color:transparent; text-align: center;border: 1px solid rgba(255,255,255, 0.6);color: white" placeholder="请输入用户名" type="text" id="username" name="username" class="ant-input"  required="required">
            </span> 
        </div> 
        <div class="ant-form-item-control" >
            <span class="ant-form-item-children" >
                <input style="background-color:transparent; text-align: center;border: 1px solid rgba(255,255,255, 0.6);color: white" onblur="InvalidPwd()" placeholder="密码" type="password" id="password" name="password" class="ant-input" required="required">
            </span> 
        </div>
        <div class="ant-form-item-control" >
            <span class="ant-form-item-children" >
                <input style="background-color:transparent; text-align: center;border: 1px solid rgba(255,255,255, 0.6);color: white" placeholder="请确认密码" type="password" id="re_password" name="re_password" class="ant-input" required="required">
            </span> 
        </div>           
        <div class="ant-form-item-control" >
            <span class="ant-form-item-children" >
                <input style="background-color:transparent; text-align: center;border: 1px solid rgba(255,255,255, 0.6);color: white" placeholder="邮箱" type="email" id="email" name="email" class="ant-input" required="required">
            </span> 
        </div> 
        <div class="ant-form-item-control" >
            <span class="ant-form-item-children" >
                <input style="background-color:transparent; text-align: center;border: 1px solid rgba(255,255,255, 0.6);color: white" placeholder="联系方式" type="tel" id="phone" name="phone" class="ant-input" required="required">
            </span> 
        </div>
        <div class="ant-form-item-control" >
            <span class="ant-form-item-children" >
                <input style="background-color:transparent; text-align: center;border: 1px solid rgba(255,255,255, 0.6);color: white" placeholder="公司" type="text" id="company" name="company" class="ant-input" required="required">
            </span> 
        </div>
<tr> <td colspan="2" align="center" style="color:red;font-size:10px;"> <!--提示信息--> 
<?php
$err = isset($_GET["err"]) ? $_GET["err"] : "";
switch ($err) {
    case 1:
        echo "用户名已存在！";
        break;

    case 2:
        echo "密码与重复密码不一致！";
        break;

    case 3:
        echo "注册成功！";
        break;
}
?> 
</td> </tr> 
    <div class="ant-form-item-control" >
            <span class="ant-form-item-children" >
                <div>
                    <button class="ant-input" type="submit" style="background-color: #6a75ca"><sapn>提交</sapn></button></div>
                    
            </span> 
        </div> 
<tr> <td colspan="2" align="center"> 
  <a href="login.php">返回登录</a> </td> </tr> </table> </form> </div> 
 <script>  
function InvalidPwd(){ 
    var password=document.getElementById("password").value;
    reg=/^[\u0391-\uFFE5]+$/;
    reg1=/^[a-zA-Z]|[0-9]\w{5,15}$/;
    reg2=/^[a-zA-Z]{6,}$/;
    reg3=/^[0-9]{6,}$/;
    
    if(password.length<6){  
        alert("密码长度不小于6!");
        document.getElementById("password").value = '';}
    if(reg.test(password)){
        alert("密码输入不能为中文！");
        document.getElementById("password").value = '';}
    if(reg1.test(password)){
        if(reg2.test(password))
        {
            alert("密码不能全为字母！");
            document.getElementById("password").value = '';}
        if(reg3.test(password))
        {
            alert("密码不能全为数字！");
            document.getElementById("password").value = '';}
        }
}
</script>
<div align="center" style="color:white"> <small>Copyright &copy; 2021-2023 </div> </div></body></html>
