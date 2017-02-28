$(function(){
	var init_url="data.php";
	$.get(init_url,function(data){
		alert(data);
	});
})