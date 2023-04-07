<?php 
    $age = isset($_POST['age']) ? $_POST['age'] : "";
    $degree = isset($_POST['degree']) ? $_POST['degree'] : "";
    $tel = isset($_POST['tel']) ? $_POST['tel'] : "";
    $workage = isset($_POST['workage']) ? $_POST['workage'] : "";
    $corp = isset($_POST['corp']) ? $_POST['corp'] : "";  
    $job = isset($_POST['job']) ? $_POST['job'] : "";
    $chuqin = isset($_POST['chuqin']) ? $_POST['chuqin'] : "";
    $outlaw = isset($_POST['outlaw']) ? $_POST['outlaw'] : "";  
    $jixiao = isset($_POST['jixiao']) ? $_POST['jixiao'] : ""; 
    $rate = isset($_POST['rate']) ? $_POST['rate'] : ""; 
    session_start(); //声明变量
    $company=$_SESSION['company']; //获取HR所在公司
    $number=$_SESSION['number'];
    //连接数据库
    $conn = mysqli_connect('localhost', 'root', '', 'staff');  
    $sql_select="select * from basic_information where number='$number'";
    $result=mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_array($result);
    //验证权限
    if(empty($row['corp']))//人员无业
    {
        $sql_update="update basic_information set job='$job',corp='$corp' where number='$number'";
        $retval=mysqli_query($conn, $sql_update);
        if(! $retval )
            die('无法更新数据: ' . mysqli_error($conn));
        else
            echo "<script>alert('更新成功！');location.href='../news.php';</script>";
        mysqli_close($conn);        
    }
    else{
        if($row['corp']==$company){
    //员工在HR的公司就职
            $sql_update="update basic_information set age='$age',tel='$tel',workage='$workage',degree='$degree',chuqin='$chuqin',job='$job',outlaw='$outlaw',jixiao='$jixiao',rate='$rate'  where number='$number'";
            $retval=mysqli_query($conn, $sql_update);
            if(! $retval )
                die('无法更新数据: ' . mysqli_error($conn));
            else
            {echo "<script>alert('更新成功！');location.href='../news.php';</script>"; }   
        mysqli_close($conn);}
        else 
            echo "<script>alert('您无权更改员工信息！');history.back();</script>"; 
    }     
?>



