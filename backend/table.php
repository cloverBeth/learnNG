<?php 
	header("content-type:text/html;charset=utf-8");

	 $day=31;
	 echo "<table width='700px' border='1px' >";
	 for($i=1;$i<=$day;){

	 	echo "<tr>";
	 	for($j=0;$j<7;$j++){
	 		if($i>$day){
	 			echo "<td>&nbsp;</td>";
	 		}else{

	 			echo "<td>{$i}</td>";
	 		}

	 		$i++;
	 	}
	 	echo "</tr>";
	 }
	 echo "</table>";


	 // 获取当前年
	 $year=$_GET['y']?$_GET['y']:date('Y');
	 //获取当前月
	 $month=$_GET['m']?$_GET['m']:date('m');
	 
	 //获取当月多少天
	 $days=date('t',strtotime("{$year}-{$month}-1"));

	 //当前一号是周几
	 $week=date('w',strtotime("{$year}-{$month}-1"));

	 echo "<h2>{$year}年{$month}月</h2>";
	 
 ?>