<?php
/**
 * Created by PhpStorm.
 * User: Think
 * Date: 2018/5/9
 * Time: 18:25
 */
include("test1.php");
 echo ning(1971);
 echo "<hr/>";

$a=array(1,2,3,'a'=>'uhhhuy',);
$a['b']=5;
unset($a[1]);
foreach($a AS $k=>$v) {
    echo "建".$k;
    echo "值".$v;
    echo "<hr/>";
}
class aaa {
    public $h=123;

    function yi() {
        $this->r=9527;
    }
}
$aaa=new aaa();
$aaa->yi();
echo $aaa->r;

