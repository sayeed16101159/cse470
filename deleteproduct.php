<?php
print_r($GLOBALS);
   $d=1;
$conn = mysqli_connect("localhost", "root", "","ecommerce");
$sql="UPDATE product_information SET DELETE_PRODUCT='".$d."' WHERE PRODUCT_ID = '".$_REQUEST['pi']."'";

	if(mysqli_query($conn, $sql))
	{
		echo "New records updated successfully";
      header("location:profile.php");
	}
        else{
            echo "not successfull";
          header("location:profile.php");
        }
