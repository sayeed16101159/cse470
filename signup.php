<?php
 session_start();
        if(isset($_SESSION["uid"])){
            header("location:profile.php");
	}
else{
	
}
$n=$d=$m=$y=$ph=$p=$g=$e=0;
print_r($GLOBALS);
echo "<br/>";
if(strlen($_REQUEST["name"])==0){
	echo "Name is mandatory";
}
ELSE
	$n=1;
echo "<br/>";


echo "<br/>";
if($_REQUEST["day"]=="day")
	echo "invalid date";
else
	$d=1;
echo "<br/>";
if($_REQUEST["month"]=="month")
	echo "invalid month";
else
	$m=1;
echo "<br/>";
if($_REQUEST["year"]=="year")
	echo "invalid year";
else
	$y=1;
echo "<br/>";
if(isset($_REQUEST["gender"]))
	$g=1;
echo "<br/>";
if(strlen($_REQUEST["phone"])!=11){
	echo "invalid phone number";
}
ELSE
	$ph=1;;
echo "<br/>";
if(stripos($_REQUEST["email_id"],"@")==0 || strrpos($_REQUEST["email_id"],"@")==strlen($_REQUEST["email_id"])-1)
	echo "invalid email";
else
	$e=1;
echo "<br/>";
if($_REQUEST["password"]==$_REQUEST["ConfirmPassword"] && strlen($_REQUEST["password"])>8)
$p=1;
 

echo "<br/>";
$da=(string)$_REQUEST["day"];
$mo=(string)$_REQUEST["month"];
$ye=(string)$_REQUEST["year"];
$dob=$da."-".$mo."-".$ye;
echo $dob;
$dlt=0;
$time=date("h:i:sa");
$passwo=$_REQUEST['password'];
$mdpass=md5($passwo);
$conn = mysqli_connect("localhost", "root", "", "ecommerce");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if($n==1)
{
$sql="INSERT INTO user_information VALUES (NULL,'".$_REQUEST['name']."','".$mdpass."','".$_REQUEST['email_id']."','".$_REQUEST['phone']."','".$dob."','".$_REQUEST['gender']."','".$dlt."','".$time."')";
	if(mysqli_query($conn, $sql)){
		echo "New records updated successfully";
        header("location:login1.php");
	}
}
else{
	echo "Invalid parameter !";
}
  mysqli_close($conn);
?>