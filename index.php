<html>
<head>

</head>
<body>

<script>
// include as an easter egg (create hidden element and add event to it

/*

function kellyTetrisBtn(){
	kellyCEgg = 6; 
	if(!document.body) return;
	var a=document.createElement("div");
	a.setAttribute("style","position : absolute; height : 10px; width : 10px; top : 0px; left : 0px;"),
	a.onclick=function(){if(!kellyCEgg){
	var a=document.createElement("script");
	a.type="text/javascript",
	a.src="kellytetris.min.js",
	a.onload=function(){KellyTetris.playMe()},kellyCEgg=6,document.body.appendChild(a)}kellyCEgg--},document.body.appendChild(a)
} kellyTetrisBtn();	

*/

// load script and include game directly to body with animation of command console

var a=document.createElement("script");
	a.type="text/javascript",
	a.src="kellytetris.js",
	a.onload=function(){KellyTetris.playMe()}
	document.body.appendChild(a);

// run game in some container, without animation and applay of css styles for this element - just launch and output game
// var tris = new KellyTetris('tris'); // iclude kellytetris.js before	

</script>
</body>

</html>
<?php
var_dump($_ENV);
?>