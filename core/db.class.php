<?php 
class db{	
	function __construct(){
		
		$this->mysqli=new MySQLi("localhost","root","","blog");
		if ( $this->mysqli->connect_errno>0 ) {
			echo "错误代码:".$this->mysqli->connect_errno;
			echo "提示语:".$this->mysqli->connect_error;
			exit;
		}
	
	}	
	
	function query ($sql) {
		return $this->mysqli->query($sql);		
	}

}
    function abc() {

    }
?>