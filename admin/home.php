<?php
include ("../core/db.class.php");
$db=new db;
session_start();
if ( isset($_SESSION['auser']) ){
	if($_SESSION['auser']) {                                     //如果为空
	
	}else {
		echo "拒绝访问,请登录后访问";                                //否则拒绝访问
		//header("location:login.php")
		exit;	
	}                                              //有session网页正常执行
}else {
	echo "拒绝访问,请登录后访问";                                //否则拒绝访问
	//header("location:login.php")
	exit;
 }
///////////////////////////用户管理页
$rows=array();
$sql='select * from admin where aid>1';
$result=$db->query($sql);
while (true) {
	$row=$result->fetch_array(MYSQL_ASSOC);
	if (!$row) {
		break;
	}
	$rows[]=$row;
}
///////////////////////////博客管理页
$rows_2=array();
$sql='select * from page where pid>0 order by pid desc ';
$result_2=$db->query($sql);
while (true) {
	$row=$result_2->fetch_array(MYSQL_ASSOC);
	if (!$row) {
		break;
	}
	$rows_2[]=$row;
}




?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=0.7, user-scalable=no">
<title>WEB管理中心</title>
<link rel="stylesheet" href="../themes/css/home.css">
<script src="../themes/js/home.js"></script>
<style>
</style>
</head>
<body>
<div id="zhezhao"></div>
<div id="div0">                
	<img id="img0" src="../themes/image/qwe.jpg">
    <span id="span0">></span>
    <span class="span1">web后台管理中心</span>
</div>
<div id="ent">
	<ul class="ul_t">
    	<li id="li_t1" class="li_t"> <?php echo $_SESSION['auser'];?> </li>
        <li id="li_t2" class="li_t">添加头像</li>
        <li id="li_t3" class="li_t">修改信息</li>
        <li id="li_t4" class="li_t"><a href="login.php" id="a_t4" style="color:#fff; text-decoration:none;">退出登录</a></li>
    </ul>
</div>
<div id="div">
     <div id="div1">
        <ul id="ul1">
           
            <li id="li1" class="li_list">
                <img id="img1" src="../themes/image/timg33.jpg">
                后台首页
            </li>
            <li id="li2" class="li_list">
                <img id="img2" src="../themes/image/user1.jpg">
                用户管理
            </li>
            <li id="li3" class="li_list">
                <img id="img3" src="../themes/image/sz.jpg">
                博客设置
            </li>
            <li id="li4" class="li_list">
                <img id="img4" src="../themes/image/zf.jpg">
                支付管理
            </li>
            <li id="li5" class="li_list">
                <img id="img5" src="../themes/image/3d4d15fd1681a123e31f698af89dcd44.jpg">
                系统设置
            </li>
            <li id="li6" class="li_list"></li>
        </ul>
     </div>
    <div id="div2">
        <div id="div2_2">
            <div id="div2_2_1" class="div2_2">              <!--第一个页面-->
            	<h3>您已登录后台管理中心...</h3>
            </div>
            <div id="div2_2_2" class="div2_2">              <!--第二个页面-->
                    <table id="table_1">
                        <tr id="tr_1">
                            <td id="td_1_1">
                                用户权限管理
                            </td>
                            <td id="td_1_2">
                                <a href="insert.php" id="a_1">添加用户</a>
                            </td>
                        </tr>
                    </table>
                    <table id="table_2">
                        <tr id="tr_2_1">
                            <td class="td_c1">ID</td>
                            <td class="td_c1">用户名</td>
                            <td class="td_c1">设置</td>
                        </tr>
                        <tr id="tr_2_2">
                            <td class="td_c2">1</td>
                            <td class="td_c2">wang246</td>
                            <td class="td_c2">
                                超级用户
                            </td>
                        </tr>
                        <?php foreach ($rows as $i=>$row) { ?>
                        <tr id="tr_2_2">
                            <td class="td_c2"> <?php echo $i+2;?> </td>
                            <td class="td_c2"> <?php echo $row['auser'];?> </td>
                            <td class="td_c2">
                                <a href="change.php?aid=<?php echo $row['aid'];?>&auser=<?php echo $row['auser'];?>&apass=<?php echo $row['apass'];?>">更改</a>
                                <a href="delete.php?aid=<?php echo $row['aid'];?>">删除</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                    
                    <?php 
					//////////////////////分页功能
					$sql="select count(*)  as  total from admin";
					$result_sum=$db->query($sql);
					$row_sum=$result_sum->fetch_array(MYSQL_ASSOC);
					$sum=$row_sum['total'];
					
					
					
					
					?>
                    <a href="">第1页</a>
            </div>
            <div id="div2_2_3" class="div2_2">               <!--第三个页面-->
                    <table id="table_1">
                            <tr id="tr_1">
                                <td id="td_1_1">
                                    博客管理
                                </td>
                                <td id="td_1_2">
                                    <a href="page_insert.php" id="a_1">添加博客页面</a>
                                </td>
                            </tr>
                        </table>
                        <table id="table_2">
                            <tr id="tr_2_1">
                                <td class="td_c1">PID</td>
                                <td class="td_c1">标题</td>
                                <td class="td_c1">作者</td>
                                <td class="td_c1">创建时间</td>
                                <td class="td_c1">更改时间</td>
                                <td class="td_c1">管理</td>
                            </tr>
                            <?php foreach ($rows_2 as $i=>$row) { ?>
                            <tr id="tr_2_2">
                                <td class="td_c2"> <?php echo $i+1;?> </td>
                                <td class="td_c2"><?php echo $row['title'];?></td>
                                <td class="td_c2"> <?php echo $row['author'];?> </td>
                                <td class="td_c2"><?php $t=date("Y-m-d H:i:s",$row['intime']+21600); echo $t;?></td>
                                <td class="td_c2"><?php $t=date("Y-m-d H:i:s",$row['updateTime']+21600); echo $t;?></td>
                                <td class="td_c2">
                                    <a href="page_change.php?pid=<?php echo $row['pid'];?>&title=<?php echo $row['title'];?>&author=<?php echo $row['author'];?>&content=<?php 			echo $row['content'];?>">
                                    	修改
                                    </a>
                                    <a href="delete.php?aid=<?php echo $row['aid'];?>">删除</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
            </div>
            <div id="div2_2_4" class="div2_2"><h3>支付模块开发中...</h3></div>
            <div id="div2_2_5" class="div2_2"><h3>系统设置模块开发中...</h3></div>
        </div>
    </div>
</div>
</body>
</html>

