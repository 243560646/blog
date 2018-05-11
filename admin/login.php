<?php
include ("../core/db.class.php");
$db=new db;
session_start();
if( isset($_SESSION['auser']) ) {
	$_SESSION['auser']='';	
}



if ( isset($_POST['auser']) ) {
	$auser=$_POST['auser'];
	$apass=$_POST['apass'];
	$sql="select * from admin where auser='{$auser}' and apass='{$apass}'";
	$mysqli_result=$db->query($sql);
	$row=$mysqli_result->fetch_array();
	if ($row) {
		$_SESSION['auser']=$row['auser'];
		$_SESSION['apass']=$row['apass'];
		$_SESSION['aid']=$row['aid'];
		header("location:home.php");
	}else{
		echo "用户名或密码错误";
		exit;
	}
	
}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=1.0, user-scalable=no ">
<title>用户登录</title>
<link rel="stylesheet" href="../themes/css/login.css">
<style>

</style>
</head>

<body>
<div id="box">
    <div id="div1">
    	<span id="span1">宁丰计算机用户管理中心</span>
    </div>
    <div id="div2">
        <form action="login.php" method="post">
            <div id="div2_1">
                <span id="span2">账户&nbsp;:</span>
                <input id="input1" type="text" name="auser" placeholder="请输入用户名">
            </div>
            <div id="div2_2">
                <span id="span3">密码&nbsp;:</span>
                <input id="input2" type="password" name="apass" placeholder="请输入密码">	
            </div>
            <div id="div2_3">
                <input id="input3" type="submit" value="&nbsp;&nbsp;登&nbsp;&nbsp;录&nbsp;&nbsp;">
            </div>
        </form>
    </div>
    <div id="div3">
    	<span class="span4">版权信息</span>
    </div>
</div>
</body>
</html>
