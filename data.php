<?php
include("db.php");
//echo "i am talking from server<br>";
//echo "Hello : ".$_REQUEST['uname'];
$d=0;
if(isset($_REQUEST["pname"])){
	//$sql="select * from student where name='".$_REQUEST["uname"]."'";
	$sql="select * from product_information where PRODUCT_NAME like '".$_REQUEST["pname"]."%' and  DELETE_PRODUCT='".$d."'";
	//echo $sql;
	$a=getfromDB($sql);
	//echo "<pre>";print_r($a);echo "<pre>";
	foreach($a as $v){?>
		  <p><a href="viewproduct.php?pid=<?php echo $v["PRODUCT_ID"]; ?>"><?php echo $v["PRODUCT_NAME"]; ?></a></p>
		
		<?php
 
	}
}
?>