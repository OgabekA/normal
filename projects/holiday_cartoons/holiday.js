$(function (){
	$(".image").click(function (){
		let url = $(this).data("url");
		$("#image").attr("attr","img/"+url);
	});
	


});