<?php
print_r($GLOBALS);
session_start();
        if(isset($_SESSION["uid"])){
	}
else{
	header("location:login1.php");
}
$name=0;
$brand=0;
$model=0;
$usetime=0;
$price=0;
$details=0;
$typ=0;
$imgtype=0;

if(strlen($_REQUEST["productname"])==0){
    echo "name";
}
else{
    $name=1;}
if(strlen($_REQUEST["brand"])==0){
    echo "brand";
}
else{
    $brand=1;}
if(strlen($_REQUEST["model"])==0){
    echo "model";
}
else{
    $model=1;}
if(strlen($_REQUEST["usetime"])==0){
    echo "use time";
}
else{
    $usetime=1;}
if(strlen($_REQUEST["price"])==0){
    echo "price";
}
else{
    $price=1;}
if(strlen($_REQUEST["details"])==0){
    echo "details";
}
else{
    $details=1;}
if($_REQUEST["type"]==0){
    echo "type";
}
else{
    $typ=1;}

    

$s=$_FILES["fileToUpload"]["tmp_name"];
$n=$_FILES["fileToUpload"]["name"];
$t=$_FILES["fileToUpload"]["type"];
$type=explode("/",$t);
echo "<br>".$type[1]."<br>";
if($type[1]=="jpeg" ||  $type[1]=="png"){
    $imgtype=1;
    
    if(file_exists("productimg/".$n)){
	echo "file already exists";
}
else{
	move_uploaded_file($s,"productimg/".$n);
}
}

//  echo $imgtype;
$dlt=0;
$u=1;

$path="productimg/".$n;

//echo $path;
$time=date("h:i:sa");

$conn = mysqli_connect("localhost", "root", "", "ecommerce");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "<br>"."name".$name."brand".$brand."model".$model."use".$usetime."price".$price."details".$details."type".$typ."<br>";
if($name==1 && $brand==1 && $model==1 && $usetime==1 && $price==1 && $details==1 && $typ==1 && $imgtype==1)
{
    echo $time;
$sql="INSERT INTO product_information VALUES (NULL,'".$_REQUEST['productname']."','".$_REQUEST['brand']."','".$_REQUEST['model']."','".$_REQUEST['usetime']."','".$_REQUEST['price']."','".$_REQUEST['details']."','".$path."','".$dlt."','".$time."','".$_SESSION['uid']."','".$_REQUEST['type']."')";
	if(mysqli_query($conn, $sql)){
		echo "New records updated successfully";
        header("location:profile.php");
	}

else{
	echo "Invalid parameter !";
    header("location:profile.php");
}
}
else{
    echo "ffffffffffff";
    header("location:profile.php");
}

  mysqli_close($conn);
?>