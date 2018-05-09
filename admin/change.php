<?php 
include("../core/db.class.php");
$db=new db;
session_start();
$session_aid=$_SESSION['aid'];
if( isset($_GET['aid']) ) {
	$old_aid=$_GET['aid'];
	$old_auser=$_GET['auser'];
	$old_apass=$_GET['apass'];	
}

if( isset($_POST['auser']) ) {
		$auser=$_POST['auser'];
		$apass=$_POST['apass'];	
		$sql="select * from admin where auser='{$auser}'";
		$result=$db->query($sql);
		$row=$result->fetch_array();
		////////////////////////////////////////////////////////////////// ///////////////改自己.....
		if($old_aid==$session_aid) {                                                                   
				$sql="select * from admin where auser='{$auser}'";
				$result_1=$db->query($sql);
				$row_1=$result_1->fetch_array();
				if($row_1) {
						if( $row_1['aid']==$session_aid ) {
								$sql="update admin set auser='{$auser}',apass='{$apass}' where aid='{$old_aid}' ";
								$result_update=$db->query($sql);
								if($result_update) {
										echo "修改成功！";	
										exit;
								}else {
										echo "修改失败！";	
										exit;
								}	
						}else if($row_1['aid']==$old_aid) {                    //如果重名得是要修改的用户名 ，允许...
								$sql="update admin set auser='{$auser}',apass='{$apass}' where aid='{$old_aid}' ";
								$result_update=$db->query($sql);
								if($result_update) {
										echo "修改成功！";	
										exit;
								}else {
										echo "修改失败！";	
										exit;
								}	
								
						}else {
								echo "该用户名已存在！请使用其他用户名！";
								echo $row_1['aid'];
								echo $old_aid;
								exit;	
						}
				
				}else {
						$sql="update admin set auser='{$auser}',apass='{$apass}' where aid='{$old_aid}' ";
						$result_update=$db->query($sql);
						if($result_update) {
								echo "修改成功！";	
								exit;
						}else {
								echo "修改失败！";	
								exit;
						}	
				}	
		/////////////////////////////////////////////////////////////////////////////////////////////////////改别人..		
		}else if($row['aid']==$old_aid) {                    //如果重名得是要修改的用户名 ，允许...
					$sql="update admin set auser='{$auser}',apass='{$apass}' where aid='{$old_aid}' ";
					$result_update=$db->query($sql);
					if($result_update) {
							echo "修改成功！";	
							exit;
					}else {
							echo "修改失败！";	
							exit;
					}	
						
			}else {
					echo "该用户名已存在！请使用其他用户名！";
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
<br/><br/><br/>
<h2>修改用户</h2>
<br/>
<hr/>
<div id="div">
	<div id="div_span">
    	<p>用户名:</p>
        <p>密码:</p>
    </div>
    
    <div id="div_input">
    	
		<form action="change.php?aid=<?php echo $old_aid;?>&auser=<?php echo $old_auser;?>&apass=<?php echo $old_apass;?>" method="post">
            <input type="text" name="auser" value="<?php echo $old_auser;?>"/><br/>
            
            <input type="password" name="apass" value="<?php echo $old_apass;?>"/><br/>
        
            <input id="btn" type="submit" value="确定修改"/>
    	</form>
    </div>
</div>
</body>
</html>