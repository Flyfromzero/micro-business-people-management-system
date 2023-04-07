<?php 
error_reporting(E_ALL^E_NOTICE);
							
							
							$file = isset($_POST['file']) ? $_POST['file']:"";
							$conn = mysqli_connect('localhost', 'root', '', 'staff'); //准备SQL语句
							if(!$conn)   //数据库连接失败
								{  exit('数据库连接失败！！！');}
							require '../vendor/autoload.php';
						 	use PhpOffice\PhpSpreadsheet\Spreadsheet;
							use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
							$spreadsheet = new Spreadsheet();
							$sheet = $spreadsheet->getActiveSheet();
							$sheet->setCellValue('A1', '员工姓名');
							$sheet->setCellValue('B1', '性别');
							$sheet->setCellValue('C1', '联系方式');
							$sheet->setCellValue('D1', '年龄');
							$sheet->setCellValue('E1', '学历');
							$sheet->setCellValue('F1', '工龄');
							$sheet->setCellValue('G1', '职位');
							$sheet->setCellValue('H1', '在职公司');
							$sheet->setCellValue('I1', '违纪记录');
							$sheet->setCellValue('J1', '出勤记录');
							$sheet->setCellValue('K1', '绩效');
							$sql_select = "SELECT * FROM `basic_information` where corp =''";
							$ret = mysqli_query($conn, $sql_select);
							$row = mysqli_fetch_array($ret);
							//if(!$row['name']){echo "<script language=javascript>alert('查无此人!');history.back();</script>";}
							$num=2;
							$sheet->setCellValue('A'.$num, $row['name']);
							$sheet->setCellValue('B'.$num, $row['sex']);
							$sheet->setCellValue('C'.$num, $row['tel']);
							$sheet->setCellValue('D'.$num, $row['age']);
							$sheet->setCellValue('E'.$num, $row['degree']);
							$sheet->setCellValue('F'.$num, $row['workage']);
							$sheet->setCellValue('G'.$num, $row['job']);
							$sheet->setCellValue('H'.$num, $row['corp']);
							$sheet->setCellValue('I'.$num, $row['outlaw']);
							$sheet->setCellValue('J'.$num, $row['chuqin']);
							$sheet->setCellValue('K'.$num, $row['jixiao']);

							while($row=mysqli_fetch_assoc($ret)){
								$num=$num+1;
								$sheet->setCellValue('A'.$num, $row['name']);
								$sheet->setCellValue('B'.$num, $row['sex']);
								$sheet->setCellValue('C'.$num, $row['tel']);
								$sheet->setCellValue('D'.$num, $row['age']);
								$sheet->setCellValue('E'.$num, $row['degree']);
								$sheet->setCellValue('F'.$num, $row['workage']);
								$sheet->setCellValue('G'.$num, $row['job']);
								$sheet->setCellValue('H'.$num, $row['corp']);
								$sheet->setCellValue('I'.$num, $row['outlaw']);
								$sheet->setCellValue('J'.$num, $row['chuqin']);
								$sheet->setCellValue('K'.$num, $row['jixiao']);
								
							}
							$writer = new Xlsx($spreadsheet);
							$writer->save($file.'失业员工档案.xlsx');
							echo "<script language=javascript>alert('导出excel成功!');history.back();</script>";
							?>