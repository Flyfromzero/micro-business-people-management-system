<html>
    <head><title>用户登录</title></head>
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
-webkit-animation:fadeInLeft 2s .2s ease both;
-moz-animation:fadeInLeft 2s .2s ease both;
}
@-webkit-keyframes fadeInLeft {
0% {
opacity:0;
-webkit-transform:translateX(-20px)
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
#animation1 {
-webkit-animation:fadeInUp 2s .2s ease both;
-moz-animation:fadeInUp 2s .2s ease both;
}
@-webkit-keyframes fadeInUp {
0% {
opacity:0;
-webkit-transform:translateY(250px)
}
100% {
opacity:1;
-webkit-transform:translateY(-250px)
}
}
@-moz-keyframes fadeInUp {
0% {
opacity:0;
-moz-transform:translateY(250px)
}
100% {
opacity:1;
-moz-transform:translateY(-250px)
}
}
</style>
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <body style="overflow: initial;">
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
        <div class="full-set" id="animation1">
            <form id="loginform" action="loginaction.php" method="post">
                <div>
                    <div class="cp-form-item" style="opacity: 1; transform: translate3d(0px,0px,0px);">
                        <h1 class="title">
                            <img src="images/welcome@2x.png" alt>                   
                        </h1> 
                    </div>
                      
                    <div>
                        <input type="radio"  name="position" value="Hr" required="required">Hr用户
                        <input type="radio"  name="position" value="employee" required="required">员工用户
                    </div>
                    
                    <br/>
                    <div class="cp-form-item" style="opacity: 1; transform: translate3d(0px,0px,0px);">                        
                        <div class="fangkuang">   
                            <div class="ant-form-item-control">
                                <input HideFocus=true style="text-align: center" type="text" placeholder="请输入用户名"  id="username" name="username" class="input" required="required">
                            </div>
                        </div>
                        <div class="fangkuang">    
                            <div class="ant-form-item-control">
                                <input HideFocus=true style="text-align: center" type="password" placeholder="请输入密码"  id="password" name="password" class="input" required="required">
                            </div>
                        </div>
                         <div class="fangkuang">   
                            <div class="ant-form-item-control">
                                <button  type="submit" value id="ack" class="input" style="background-color: #6a75ca" >登录</button>
                            </div>
                          </div>
                        <font style="font-family:宋体;font-size:16px">没有账号，快去<a href="register.php" ><font style="font-family:宋体">注册</font></a></font><font style="font-family:宋体;font-size:16px">吧！</font>
                    </div>
                </div>
            </form>
            <div align="center" style="color:white;font-size: 16px"><a href="phpmailer/mail_login.php">邮箱验证登录</a></div> </div></body></html>
        </div>                     
    </body>
</html>
