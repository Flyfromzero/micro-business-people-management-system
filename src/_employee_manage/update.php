<?php
error_reporting(E_ALL^E_NOTICE);
    $number = isset($_POST['number']) ? $_POST['number'] : "";
    session_start(); //声明变量
    $_SESSION['number']=$number;
    $conn = mysqli_connect('localhost', 'root', '', 'staff');  //准备SQL语句
    if(!$conn)   //数据库连接失败
    {  echo "<script>alert('数据库连接失败！')</script>";}
    //数据库连接成功
    else{
        $result = mysqli_query($conn,"SELECT * FROM basic_information WHERE number='$number'");
	$row = mysqli_fetch_array($result);
        if($row['number']!=$number) echo "<script>alert('档案不存在！');location.href='search.php';</script>";
    }	
?>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>小微企业管理系统</title>
<link rel="stylesheet" href="../css/style5.css">
</head>
    
<body>
    
    <div class="card" data-state="#about" style="width: 80%;height: 80%">
  <div class="card-header">
    <div class="card-cover" style="background-image: url('../images/user.jpg')"></div>
    <img class="card-avatar" src="../images/user.jpg" alt="avatar" />
    <h1 class="card-fullname"><?php echo $row['name'];?></h1>
    <h2 class="card-jobtitle"><?php echo $row['corp'],'   ',$row['job'];?></h2>
  </div>
  <div class="card-main">
  <form name="userForm" method="post" action="update_action.php" style="width: 100%;height: 100%">
    <div class="card-section is-active" id="about">
      <div class="card-content">
        <div class="card-subtitle">ABOUT</div>
        <p class="card-desc">
            <table width="100%" border="0" cellpadding="2" cellspacing="1" style="width:100%">
		<tr>                                             
                    <td width="15%"><div align="right">身份证：</div></td>
                    <td width="40%"><input style="border:none" readonly="readonly" name="ID" type="text" class="input" id="ID"  value="<?php echo substr_replace($row['ID'],"****",14,4);?>"/>
                    <td nowrap align="right" width="9%">性别：</td>
                    <td width="36%"><input style="border:none" readonly="readonly" name="sex" type="text" class="input" id="sex" value="<?php  echo $row['sex'];?>"></td> 
                </tr>					  					  				    					    					  
		<tr>
                    <td width="12%"><div align="right">年龄：</div></td>
                    <td width="43%"><input style="border:none" required name="age" type="text" class="input" id="age" value="<?php echo $row['age']; ?>"></td>    
                    <td nowrap align="right" width="9%">电话：</td>
                    <td width="36%"><input style="border:none" required name="tel" type="text" class="input" id="tel" value="<?php  echo $row['tel'];?>"></td>																	
		</tr>
                <tr>                                             
                    <td width="12%"><div align="right">学历：</div></td>
                    <td width="43%"><input style="border:none" required readonly="readonly" name="degree" type="text" class="input" id="degree"  value="<?php echo $row['degree'];?>"/>
                    <td nowrap align="right" width="9%">工龄：</td>
                    <td width="36%"><input style="border:none" required name="workage" type="text" class="input" id="workage" value="<?php  echo $row['workage'];?>"></td> 
                </tr>
                <tr>                                             
                    <td width="15%"><div align="right">公司：</div></td>
                    <td width="40%"><input style="border:none"  name="corp" type="text" class="input" id="corp"  value="<?php echo $row['corp'];?>"/>
                    <td nowrap align="right" width="9%">职位：</td>
                    <td width="36%"><input style="border:none"  name="job" type="text" class="input" id="job" value="<?php  echo $row['job'];?>"></td> 
                </tr>
            </table>
        </p>
      </div>
    </div>
    <div class="card-section" id="experience">
      <div class="card-content">
        <div class="card-subtitle">WORK EXPERIENCE</div>
        <div class="card-timeline">
          <div class="card-item" data-year="出勤率">              
              <div class="card-item-desc">
                  <textarea style="border:none" name="chuqin" cols="30" rows="5" class="input" id="chuqin"></textarea>
                  <script>document.getElementById("chuqin").value="<?php echo $row['chuqin'];?>"</script>
              </div>
          </div>
          <div class="card-item" data-year="绩效">
            <div class="card-item-desc">
                  <textarea style="border:none" name="jixiao" cols="30" rows="5" class="input" id="jixiao"></textarea>
                  <script>document.getElementById("jixiao").value="<?php echo $row['jixiao'];?>"</script>
            </div>
          </div>
          <div class="card-item" data-year="违纪">
            <div class="card-item-desc">
                  <textarea style="border:none" name="outlaw" cols="30" rows="5" class="input" id="outlaw"></textarea>
                  <script>document.getElementById("outlaw").value="<?php echo $row['outlaw'];?>"</script>
            </div>
          </div>
          <div class="card-item" data-year="评价">
            <div class="card-item-desc">
                  <textarea style="border:none" name="rate" cols="30" rows="5" class="input" id="rate"></textarea>
                  <script>document.getElementById("rate").value="<?php echo $row['rate'];?>"</script>
            </div>
          </div>
          <div class="card-item" data-year="综评">
            <div class="card-item-desc">
                  <textarea style="border:none" name="score" cols="30" rows="5" class="input" id="score"></textarea>
                  <script>document.getElementById("score").value="<?php 
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
    $STRING = $row['rate'];
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
?>"</script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-section" id="contact">
      <div class="card-content">
        <div class="card-subtitle">CONFIRM</div>
        <div class="card-contact-wrapper">
          <div class="card-contact">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
              <circle cx="12" cy="10" r="3" /></svg>
            请检查必填项是否为空！
          </div>
          <div class="card-contact">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" /></svg>(269) 756-9809</div>
          <div class="card-contact">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <path d="M22 6l-10 7L2 6" /></svg>
            <?php echo date('Y-m-d')?>
          </div>
          <button class="contact-me">Confirm</button>
        </div>
      </div>
    </div></form>
    <div class="card-buttons">
      <button data-section="#about" class="is-active">个人主页</button>
      <button data-section="#experience">工作情况</button>
      <button data-section="#contact">保存更改</button>
    </div>
  </div>
</div>

<script  src="../Js/script.js"></script>
</body>
</html>