<?php
	if(empty($_GET))
	{
		header("location:index.php");
	}
	
		$link=mysqli_connect("localhost","root","")or die("can not connect");
		mysqli_select_db($link,"jobscope") or die("can not select database");
		
		$q="delete from jobs where j_id=".$_GET['id'];
		
		mysqli_query($link,$q);
		
		header("location:manage.php");	
?>