<?php
    function getfromDB($sql){
	 $conn = mysqli_connect("localhost", "root", "","ecommerce");
	//echo $sql;
        $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
        $arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
         mysqli_close($conn);
	return $arr;
    
}
?>