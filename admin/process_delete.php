<?php session_start();
if(!(isset($_SESSION['status']) && $_SESSION['unm']=='admin'))
{
	header("location:../index.php");
}
$link=mysqli_connect("localhost","root","")or die("can not connect");
mysqli_select_db ($link,"jobscope") or die("can not select database");
$q="delete from contact where cont_fnm='".$_GET['cat']."'";
mysqli_query($link,$q) or die ("wrong query");
mysqli_close($link);
header("location:contact.php");
?>