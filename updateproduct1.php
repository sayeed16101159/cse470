


<?php
print_r($GLOBALS);
$conn = mysqli_connect("localhost", "root", "","ecommerce");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="UPDATE product_information SET PRICE = '".$_REQUEST['price']."' , PRODUCT_DETAILS='".$_REQUEST['details']."' WHERE PRODUCT_ID = '".$_REQUEST['pid']."'";

	if(mysqli_query($conn, $sql))
	{
		echo "New records updated successfully";
       header("location:profile.php");
	}
        else{
            echo "not successfull";
            header("location:profile.php");
        }?>
