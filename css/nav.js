function stateChange(xmlhttp, div_id)
{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
		document.getElementById(div_id).innerHTML=xmlhttp.responseText;
}


function loadTxt(url, div_id)
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		stateChange(xmlhttp, div_id);
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

$(document).ready(function(){
	$(".nav_menu_div").hide();	

	//根菜单
	$(".nav_cell").mouseenter(function(){
		$(this).css("background-color", "#EBEBEB");
		$(".nav_menu_div",this).slideDown(150);	
		});
	$(".nav_cell").mouseleave(function(){
		$(this).css("background-color", "white");
		$(".nav_menu_div",this).slideUp(150);	
		});
	
	//子菜单
	$(".nav_menu_cell_div").mouseenter(function(){
		$(this).css("background-color", "#EBEBEB");
		});
	$(".nav_menu_cell_div").mouseleave(function(){
		$(this).css("background-color", "white");
		});
});	


