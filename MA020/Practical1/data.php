<!DOCTYPE html>
<html>
<head>
	<title>Data Of culture </title>
</head>
<body>
<?php 
	echo "Name :".$_GET['nm']."<br>";
	echo "Branch :".$_GET['br']."<br>";
	echo "Smester :".$_GET['sem']."<br>";
	echo "Roll No :".$_GET['roll']."<br>";
	echo "Email :".$_GET['email']."<br>";
	echo "Subject  :";
	if (isset($_GET['sub']))
		echo $_GET['sub']." " ;
	if (isset($_GET['sub1']))
		echo $_GET['sub1']." ";
	if (isset($_GET['sub2']))
		echo $_GET['sub2']." ";
	if (isset($_GET['sub3']))
		echo $_GET['sub3']." ";
	if (isset($_GET['sub4']))
		echo $_GET['sub4']." "; 
?>	
</body>
</html>