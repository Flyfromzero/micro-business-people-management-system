<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;">
<title>邮箱验证登录</title>

<link href="../css/layer.css" rel="stylesheet" type="text/css" />
<link href="../css/style1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Js/layer.js"></script>

<script type="text/javascript" src="../Js/the_code.js"></script>
</head>
<body>
    <style>
        #animation1 {
-webkit-animation:fadeInUp 2s .2s ease both;
-moz-animation:fadeInUp 2s .2s ease both;
}
@-webkit-keyframes fadeInUp {
0% {
opacity:0;
-webkit-transform:translateY(100px)
}
100% {
opacity:1;
-webkit-transform:translateY(0px)
}
}
@-moz-keyframes fadeInUp {
0% {
opacity:0;
-moz-transform:translateY(100px)
}
100% {
opacity:1;
-moz-transform:translateY(0px)
}}
    </style>
    <div class="the-code" style="width:60%;height:auto;margin:10px auto;" id="animation1">
        <div class="the-header" style="width:100%;height:20%;margin:0 auto">
		<div class="the-title" style="width:100%;height:20%;text-align: center;position: absolute;top:-30px;left:15">
                    <h4 style="font-size:40px;font-family: 宋体;color:#ccccff ">邮箱验证登录</h4>
		</div>		
	</div>
        <div class="the-content" style="margin: -80px auto 0px auto">		
            <form action="vertify.php" class="the-forms" method="post">
                <input type="tel" class="login_ipt error" id="add_phone" value="" name="email" placeholder="请输入您的邮箱" required="required"/>
			<input type="submit" class="close_tel" id="addSendCode" value="获取验证码" />			
            </form>
            <form method="post"> 
            <input type="text" name="number" class="code error" id="number" value="" placeholder="请输入验证码" required="required"/>
			<div class="updateBtn">
                            <button type="submit" id="login" name="login" onclick="check()">登录</button>
			</div>
            <?php 
                session_start(); 
                $code = isset($_SESSION['code']) ? $_SESSION['code'] : "";
                $number = isset($_POST['number']) ? $_POST['number'] : "";
                if(!empty($number) &&$code!=$number) 
                    echo "<script language=javascript>alert('验证码输入错误！');location.href='mail_login.php'</script>";
                if($code==$number) //邮箱验证成功
                    echo "<script>location.href='../load.php'</script>";
            ?>
            </form>
	</div>
    </div>      
</body>
</html>
