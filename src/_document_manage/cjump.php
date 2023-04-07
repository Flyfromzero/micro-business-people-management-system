<?php
error_reporting(E_ALL^E_NOTICE);
$name = isset($_POST['name']) ? $_POST['name'] : "";
$age = isset($_POST['age']) ? $_POST['age'] : "";
$sex = isset($_POST['sex']) ? $_POST['sex'] : "";
$degree = isset($_POST['degree']) ? $_POST['degree'] : "";
$id = isset($_POST['id']) ? $_POST['id'] : "";
$workage = isset($_POST['workage']) ? $_POST['workage'] : "";
$corp = isset($_POST['corp']) ? $_POST['corp'] : "";
$job = isset($_POST['job']) ? $_POST['job'] : "";
$tel = isset($_POST['tel']) ? $_POST['tel'] : "";
$conn = mysqli_connect('localhost', 'root', '', 'staff'); //准备SQL语句
if(!$conn)   //数据库连接失败
    {  exit('数据库连接失败！！！');}
 //数据库连接成功
 else{
    $sql_count="SELECT COUNT(*)  FROM basic_information";
    $result=mysqli_query($conn, $sql_count);
    $rs = mysqli_fetch_array($result);
    $count=$rs[0]+1;
    
    $sql = "SELECT ID FROM basic_information WHERE ID = '$id'"; //执行SQL语句
    $ret = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($ret); //判断用户名是否已存在
    if ($row['ID']==$id) { //用户已存在，显示提示信息
        echo "<script language=javascript>alert('员工档案已经存在！');location.href='cdocument.php'</script>";
    }
    else{
    $sql_select = "INSERT INTO basic_information(name, ID, sex, tel, age, degree, workage, job, corp, outlaw, chuqin, jixiao, rate, number) 
                    VALUES ('$name','$id','$sex','$tel','$age','$degree','$workage','$job','$corp','无','无','无','无','$count')"; //执行SQL语句
        if(mysqli_query($conn,$sql_select))echo"<script language=javascript>alert('档案创建成功,编号为:{$count}');location.href='cdocument.php'</script>";
        else echo"<script language=javascript>alert('档案创建失败！');location.href='cdocument.php';</script>";
    }
  mysqli_close($conn);//关闭数据库
 }
  ?> 