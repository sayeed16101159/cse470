<?php
 session_start();
        if(isset($_SESSION["uid"])){
	}
else{
	header("location:login1.php");
}

$conn = mysqli_connect("localhost", "root", "","ecommerce");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$i=1;
	$sql = "SELECT PASSWORD FROM user_information where USER_ID='".$_SESSION["uid"]."'";
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}

echo "<br>";
	

	echo "<br>";


	if(strlen($_REQUEST["phone"])!=11)
	{

		echo "not set ";
	}
	else
	{
		echo"done";
	}
	echo "<br>";


	echo "<br>";
	$len=$_REQUEST["newpassword"];
	$len2=$_REQUEST["confirmpassword"];

	$match=$_REQUEST["oldpassword"];
foreach($arr as $v){
	if($v["PASSWORD"]==$match && $len==$len2)
	{
		$sql="UPDATE user_information SET PHONE = '".$_REQUEST['phone']."' , PASSWORD='".$_REQUEST['newpassword']."' WHERE USER_ID = '".$_SESSION['uid']."'";

	if(mysqli_query($conn, $sql))
	{
		echo "New records updated successfully";
        header("location:profile.php");
	}
        else{
            echo "not successfull";
            header("location:update1.php");
        }
	}
    else{
            echo "not successfull";
            header("location:update1.php");
        }
}
 mysqli_close($conn);

?>
