<?php
include('header1.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Team Section</title>
<style>
*{
	margin:0;
	padding:0;
	font-family:"Comic Sans MS", cursive;
}
.team-section{
	overflow:hidden;
	text-align: center;
	background:url(black.jpg);
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment:fixed;
	padding:60px;
}
.team-section{
	text-transform:uppercase;
	margin-bottom:60px;
	color:white;
	font-size:30px;
}
.border{
	display:block;
	margin:auto;
	width:160px;
	height:3px;
	background:#C33;
	margin-bottom:40px;
}
.ps{
	margin-bottom:40px;
}
.ps a{
	display:inline-block;
	margin:0 30px;
	width:160px;
	height:160px;
	overflow:hidden;
	border-radius:50%;
}
.ps a img{
	width:100%;
	filter: grayscale(100%);
	transition:0.4s all;
}
.ps a:hover > img{
	filter: none;
}
.section{
	width:600px;
	margin:auto;
	font-size:20px;
	color:white;
	font-weight:bold;
	text-align:justify;
	height:0;
	overflow:hidden;
}
.section:target{
	height:auto;
}
.name{
	display:block;
	margin-bottom:30px;
	text-align:center;
	text-transform:uppercase;
	font-size:22px;
}
body{
	background-image:url(black.jpg);
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment:fixed;

</style>
</head>

<body>
<div class="team-section">
<h1>Our Team</h1>
<span class="border"></span>
<div class="ps">
<a href="#p2"><img src="rashan.PNG" alt=""/></a>
</div>

<div class="section" id="p2">
<span class="name">Rashandeep Singh</span>
<span class="border"></span>
<p>
Pursuing computer science engineering from Chandighar College Of Engineering And Technology
</p>
</div>



</body>
</html>
