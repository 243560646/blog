<?php 
include("../core/db.class.php");
$db=new db;
$onoff=0;
if(   isset($_POST['author'])    ) {
	$title=$_POST['title'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	$intime=time()+21600;
	$updateTime=time()+21600;
		
	$sql="insert into page (author,title,content,intime,updateTime)values('{$author}','{$title}','{$content}','{$intime}','{$updateTime}')";
	$result=$db->query($sql);
	if($result) {
		$onoff=1;                                                                //在数据库中插入...
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
<h2>添加博客</h2>
<br/>
<hr/>
<div id="div">
	<div id="div_span">
    	<p>标题:</p>
        <p>作者:</p>
        <p>正文:</p>
    </div>
    
    <div id="div_input">
    	
		<form action="page_insert.php" method="post">
            <input type="text" name="title" placeholder="博客标题"/><br/>
            
            <input type="text" name="author" placeholder="文章作者"/><br/>
            
            <textarea name="content" placeholder="输入正文..."></textarea><br/>
            
            <input id="btn" type="submit" value="添加"/>
    	</form>
    </div>
</div>
</body>
</html>