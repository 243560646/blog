<?php 
include("../core/db.class.php");
$db=new db;
session_start();
$user_aid=$_SESSION['aid'];
$aid=$_GET['aid'];
if($user_aid==$aid) {
	echo "不能删除当前用户！";	
	exit;
}
$sql="delete from admin where aid='{$aid}'";
$result=$db->query($sql);
if($result) {
	echo "删除成功";
}else {
	echo '删除失败';
}



?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style>
a{ text-decoration:none;}
</style>
</head>

<body>
<br/><br/>
<a href="home.php"><返回</a>
</body>
</html>