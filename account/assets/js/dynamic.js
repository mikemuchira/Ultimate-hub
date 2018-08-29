$(document).ready(function(){
	$("#content").load("dashboard.php");
});
$("a").click(function(){
	var page = $(this).attr("target_page");
	$("#content").load(page);
	return false;
});