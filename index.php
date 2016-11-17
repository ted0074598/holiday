<?php 
include_once'bridge.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>列表</title>
	<script src="script/My97DatePicker/WdatePicker.js"></script>
	<script src="script/javascript.js"></script>
	<link href="script/css.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="list">
				
				 <div class="bg">
					<div class="table"><b>姓名</b></div>
					<div class="table"><b>电话</b></div>
					<div class="table"><b>请假日期</b></div>
					<div class="table"><b>剩余天数</b></div>
				 </div>
				 
				 <?php
					
					
					
					$m = new M(); 

					$total = $m->Total('fofo_holiday');
					$page = new PHPPage($total,10);
					$limit =$page->limit();

					$query='select * from fofo_holiday where h_stat=1 order by h_end_time limit '.$limit;

					$data=$link->query($query);
					$i=0;
					foreach ($data as $key) {
							/*
							echo $h_name=$key['h_name'].'<br/>';
							echo $h_photo=$key['h_photo'].'<br/>';
							echo $h_time=$key['h_time'].'<br/>';
							echo $h_day=$key['h_day'].'<br/>';
							echo $h_end_time=$key['h_end_time'].'<br/>=>';
							*/

						    $start_day=strtotime($key['h_end_time']);
						    $today=strtotime(date('Y-m-d'));
						    $days=$start_day-$today;
						   	$days=$days/(60*60*24);
						    //echo $days;	 
							

						    if ($i%2==1) {
						    	$class='class=bg';
						    }else
						    {
						    	$class='';
						    }
						    if($days<=0)
						    {
						    	$days='0';
						    }
						echo '<div '.$class.'>
								<div class="table">'.$key['h_name'].'</div>
								<div class="table">'.$key['h_photo'].'</div>
								<div class="table">'.$key['h_time'].'</div>
								<div class="table">'.$days.'</div>
							  </div>';
							 $i++; 	
						}	



					
				 ?>
				 <div><?php echo $page->show(); ?></div><div><a href="admin/login.php">后台登陆</a></div>
	</div>
	
  		
	
</body>
</html>