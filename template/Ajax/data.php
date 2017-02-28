<?php
$action=$GET['action'];
switch($action){
case 'init_data_list':
  init_data_list();
  break;
case 'add_row':
  add_row();
  break;
case 'del_row':
  add_row();
  break;
case 'edit_row':
  add_row();
  break;
}

function init_data_list(){
	$data=array();	
	$sql="select * from `et_data` order by `id` asc";
	$query=query_sql($sql);
	while($row=$query->fetch_assoc()){
		$data[]=$row;
	}
	echo json_encode($data,true);
}
function query_sql(){
	$mysqli = new mysqli("127.0.0.1", "root", "root", "etable");
	$sqls = func_get_args();
	foreach($sqls as $s){
		$query = $mysqli->query($s);
	}
	$mysqli->close();
	return $query;
}