<?php
error_reporting(E_ALL^E_NOTICE);
    $number = isset($_POST['number']) ? $_POST['number'] : "";
    if(!$number)die('不能为空！');
    $conn = mysqli_connect('localhost', 'root', '', 'staff'); //准备SQL语句
    if(!$conn)   //数据库连接失败
        {  exit('数据库连接失败！！！');}
//数据库连接成功
    $sql = "SELECT number FROM basic_information WHERE number = '$number'";
    $ret = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($ret);
    if($row['number']!=$number) echo"<script language=javascript>alert('该员工档案不存在！');location.href='ddocument.php'</script>";
    else{
        $sql_select = "DELETE FROM `basic_information` WHERE `number`='$number'"; //执行SQL语句
        if(mysqli_query($conn,$sql_select))
            echo"<script language=javascript>alert('档案删除成功！');location.href='ddocument.php'</script>";
        else 
            echo"<script language=javascript>alert('档案删除失败！');location.href='ddocument.php'</script>";
    }
    mysqli_close($conn);//关闭数据库
?> 