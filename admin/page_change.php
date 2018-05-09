<?php 
include("../core/db.class.php");
$db=new db;
$onoff=0;
if( isset($_GET['pid']) ) {
	$pid=$_GET['pid'];
	$change_title=$_GET['title'];
	$change_author=$_GET['author'];
	$change_content=$_GET['content'];
		
}
if(   isset($_POST['author'])    ) {
	$title=$_POST['title'];
	$author=$_POST['author'];
	$content=$_POST['content'];
	$updateTime=time();
		
	$sql="update page set title='{$title}', author='{author}',content='{$content}',updateTime='{$updateTime}'";
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
<title>博客更改</title>
<link rel="stylesheet" href="../themes/css/insert.css"/>
<style>
a{ text-decoration:none;}
</style>
</head>

<body>
</body>
<?php 
	if($onoff) {
		echo '<a href="home.php"><返回</a><br/><br/><p>修改成功!</p>';
		exit;
	}
?>
<br/><br/><br/>
<h2>博客修改</h2>
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
            <input type="text" name="title" value="<?php echo $change_title; ?>"/><br/>
            
            <input type="text" name="author" value="<?php echo $change_author;?>"/><br/>
            
            <textarea name="content"><?php echo $change_content; ?></textarea><br/>
            
            <input id="btn" type="submit" value="确认更改"/>
    	</form>
    </div>
</div>
</body>
</html>