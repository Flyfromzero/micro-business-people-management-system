<?php
error_reporting(E_ALL^E_NOTICE);
$conn = mysqli_connect('localhost', 'root', '', 'staff');
session_start(); //声明变量
$number = isset($_SESSION['number']) ? $_SESSION['number'] : ""; 
$result = mysqli_query($conn,"SELECT * FROM basic_information WHERE number='$number'");
$row = mysqli_fetch_array($result);
$name=$row['name'];
$id=$row['ID'];
$sex=$row['sex'];
$tel=$row['tel'];
$age=$row['age'];
$degree=$row['degree'];
$workage=$row['workage'];
$job=$$row['job'];
$corp=$row['corp'];
$outlaw=$row['outlaw'];
$chuqin=$row['chuqin'];
$jixiao=$row['jixiao'];
$rate=$row['rate'];

require_once __DIR__ . '/vendors/autoload.php';

$mpdf = new \Mpdf\Mpdf(['zh-CN','A4','','宋体',12,12,12,12]);
$mpdf->useAdobeCJK=TRUE;
$mpdf ->autoScriptToLang = true;
$mpdf -> autoLangToFont = true;
$mpdf->WriteHTML('<h2 align="center">员工信息表</h2><table width="70%" height="200px" align="center" border="1">'
        . '<tr><td>档案号:</td><td>'.$number.'</td></tr>'
        . '<tr><td>姓名:</td><td>'.$name.'</td></tr>'
        . '<tr><td>身份证号:</td><td>'.substr_replace($id,"****",14,4).'</td></tr>'
        . '<tr><td>性别:</td><td>'.$sex.'</td></tr>'
        . '<tr><td>手机号:</td><td>'.$tel.'</td></tr>'
        . '<tr><td>年龄:</td><td>'.$age.'</td></tr>'
        . '<tr><td>学历:</td><td>'.$degree.'</td></tr>'
        . '<tr><td>工龄:</td><td>'.$workage.'</td></tr>'
        . '<tr><td>职位:</td><td>'.$job.'</td></tr>'
        . '<tr><td>企业:</td><td>'.$corp.'</td></tr>'
        . '<tr><td>违纪情况:</td><td normal="normal" style="word-wrap:break-word;word-break:break-all;">'.$outlaw.'</td></tr>'
        . '<tr><td>出勤率:</td><td normal="normal" style="word-wrap:break-word;word-break:break-all;">'.$chuqin.'</td></tr>'
        . '<tr><td>绩效:</td><td normal="normal" style="word-wrap:break-word;word-break:break-all;">'.$jixiao.'</td></tr>'
        . '<tr><td>主观评价:</td><td normal="normal" style="word-wrap:break-word;word-break:break-all;">'.$rate.'</td></tr></table>');
$mpdf->Output();
 
?>

