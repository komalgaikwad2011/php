<html>
<head>
<script>
function pageLoad()
{
	alert("Page Loaded");
}
function checkName()
{
	var name=document.getElementById("name").value;
	if(name!="")
	{
		var x=document.getElementById("name");
		x.style.color="red";
		x.style.fontSize="28px";
	}
	else
	{
		document.getElementById("img").style.display="block";
	}
}

function bigImg()
{
	var y=document.getElementById("img")
	y.style.height="500px";
	y.style.width="500px";
	
}

function normalImg()
{
	var y=document.getElementById("img")
	y.style.height="200px";
	y.style.width="200px";
	
}
function clickImg()
{
	document.getElementById("img").style.height="150px";
}
function mouseupImg()
{
	document.getElementById("img").style.width="450px";
	
}
</script>

</head>
<body onload="pageLoad()">
<h3>Enter student name</h3>
<input type="text" id="name" onblur="checkName()"><br><br>

<img id="img" src="https://img.freepik.com/free-photo/closeup-shot-beautiful-butterfly-with-interesting-textures-orange-petaled-flower_181624-7640.jpg?semt=ais_hybrid&w=740&q=80" style="display:none;" onmouseover="bigImg()" onmouseout="normalImg()" onclick="clickImg()" onmouseup="mouseupImg">
</body></html>