<html>
    <head>
        <title>Update Product</title>
    </head>
    <body>
        <div class="mainContain">
    <?php
         require("db.php");
            session_start();
        if(isset($_SESSION["uid"])){
	}
else{
	header("location:login1.php");
} 
         $sql="select PRODUCT_ID,BRAND,MODEL,PRICE,USAGE_TIME,PRODUCT_DETAILS,IMAGE_PATH from product_information where PRODUCT_ID='".$_REQUEST['pid']."'";
	$a=getfromDB($sql);
        foreach($a as $v) {?>
    <div class="product" >    
     <img src="<?php echo $v["IMAGE_PATH"];?>" alt="img" style="height:100px; width:100px;  padding:5px; "><br>
	  BRAND:<?php	echo $v["BRAND"];?><br>
        
      MODEL:<?php	echo $v["MODEL"];?><br>
        USAGE TIME :<?php	echo $v["USAGE_TIME"];?><br>
        <form action="Updateproduct1.php?pid=<?php echo $v["PRODUCT_ID"];?>" method="post"> 
        PRICE:<input type="text" name="price" value="<?php	echo $v["PRICE"];?>"><br>
        PRODUCT DETAILS :<br><textarea name="details" rows="8" cols="22"><?php	echo $v["PRODUCT_DETAILS"];?></textarea><br>
            <input type="submit" value="Update" name="submit">
            </form>
        <a href="deleteproduct.php?pi=<?php echo $_REQUEST["pid"];?>">DELETE</a>
    </div>    
        <?php
	}
        
              
?>  
     
</div>
    </body>
</html>