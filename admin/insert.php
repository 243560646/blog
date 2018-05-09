<?php 
include("../core/db.class.php");
$db=new db;
$onoff=0;
if(   isset($_POST['auser'])    ) {
	$auser=$_POST['auser'];
	$apass=$_POST['apass'];
	$apass2=$_POST['apass2'];
	
	$sql="select * from admin where auser='{$auser}'";
	$result_1=$db->query($sql);
	$row=$result_1->fetch_array();                                                              //用户名验重
	if($row) {
		echo "该用户名已被注册,请重新注册！";
		exit;	
	}
	
	if($apass!=$apass2) {
		echo "两次密码输入请保持相同！";                                 //密码验重
		exit;	
	}
		
	$sql="insert into admin (auser,apass)values('{$auser}','{$apass}')";
	$result_2=$db->query($sql);
	if($result_2) {
		$onoff=1;                                                                //在数据库中插入用户名
	}else {
		echo "注册失败！";
		exit;
	}

}



?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=0.7, user-scalable=no ">
<title>添加账户</title>
<link rel="stylesheet" href="../themes/css/insert.css"/>
<style>
a{ text-decoration:none;}
</style>
</head>

<body>
</body>
<?php 
	if($onoff) {
		echo '<a href="home.php"><返回</a><br/><br/><p>添加成功!</p>';
		exit;
	}
?>
<br/><br/><br/>
<h2>用户注册</h2>
<br/>
<hr/>
<div id="div">
	<div id="div_span">
    	<p>用&nbsp;户&nbsp;名:</p>
        <p>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:</p>
        <p>确认密码:</p>
    </div>
    
    
   <form action="insert.php" method="post"> 
        <div id="div_input">
                <input type="text" name="auser" placeholder="6~8位字母或数字"/><br/>
                
                <input type="password" name="apass" placeholder="设置密码"/><br/>
                
                <input type="password" name="apass2" placeholder="重复密码"/><br/>
        </div>
        <div id="div_submit">
        		<input id="btn" type="submit" value="注册"/>
        </div>
    </form>
</div>
</body>
</html>