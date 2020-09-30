<html>
    <head>
        <title>Product</title>
        <style>
                .manu ul li
{
  background-color: #0086b3;
  height: 35px;
  width:200px;

  text-align: center;
  line-height: 35px;
  float: left;
  position: relative;
  border-radius: 5px;


}
.manu ul li a{
  text-decoration: none;
  color: white;
  display: block;

}
.manu ul ul ul
{
  margin-left: 160px;
  top: 0px;
}
.manu ul
{
  list-style: none;


}
.manu ul ul
{
  position: absolute;
  display: none;
  margin-left: -40px;
}
.manu ul li:hover >ul
{
  display: block;

}
.manu ul li a:hover
{
  background-color: #004d66;
  border-radius: 5px;

}
.blank
{
  height: 35px;
  width: 100%;
  background-color: #0086b3;
}
.space
{
  float: right;
}            
        </style>
    </head>
    <body>
        <div class="manu">
      <ul>
          <li><a href="home.php">Home</a></li>
          



        <div class="space">
          <li><a href="login1.php">Log In</a></li>
          <li><a href="signup1.php">Sign Up</a></li>
        </div>

       </ul>

    </div>
<div class="blank">
  <!--blank space in this fieald-->
</div>
<div class="filter">

</div>
        <div class="mainContain">
    <?php
      /*  require("db.php");
           
         $sql="select BRAND,MODEL,PRICE,USAGE_TIME,PRODUCT_DETAILS,IMAGE_PATH from product_information where PRODUCT_ID='".$_REQUEST['pid']."'";
	$a=getfromDB($sql);
        foreach($a as $v) {?>
    <div class="product" >    
     <img src="<?php echo $v["IMAGE_PATH"];?>" alt="img" style="height:100px; width:100px;  padding:5px; "><br>
	  BRAND:<?php	echo $v["BRAND"];?><br>
        
      MODEL:<?php	echo $v["MODEL"];?><br>
        USAGE TIME :<?php	echo $v["USAGE_TIME"];?><br>
        PRODUCT DETAILS :<?php	echo $v["PRODUCT_DETAILS"];?><br>
        PRICE:<?php	echo $v["PRICE"];?><br>
    </div>    
        <?php
	}*/
        
              
?>  
            <?php 
require("jsondb.php");
$sql="select BRAND,MODEL,PRICE,USAGE_TIME,PRODUCT_DETAILS,IMAGE_PATH from product_information where PRODUCT_ID='".$_REQUEST['pid']."'";
$jsonData= getJSONFromDB($sql);
$jsn=json_decode($jsonData,true);
//echo "<p>".$v["PRODUCT_NAME"]." with cgpa : ".$v["MODEL"]."</p>";
	//echo "<p>".$v->name." with cgpa : ".$v->cgpa."</p>";                         
foreach($jsn as $v){?>
    <div class="product" >    
     <img src="<?php echo $v["IMAGE_PATH"];?>" alt="img" style="height:150px; width:150px;  padding:5px; "><br>
	  BRAND:<?php	echo $v["BRAND"];?><br>
        
      MODEL:<?php	echo $v["MODEL"];?><br>
        USAGE TIME :<?php	echo $v["USAGE_TIME"];?><br>
        PRODUCT DETAILS :<?php	echo $v["PRODUCT_DETAILS"];?><br>
        PRICE:<?php	echo $v["PRICE"];?><br>
    <?php
}
?>     
</div>

            <?php
       
          require("db.php");          
        $sql="select USER_NAME,PHONE from user_information where USER_ID=(select USER_ID from product_information where product_id='".$_REQUEST['pid']."')";
	$a=getfromDB($sql);
	
	/*foreach($a as $v) {
		echo "<p>".$v["USER_NAME"]." with cgpa : ".$v["EMAIL"]."</p>";
	}*/
	foreach($a as $v) {?>
    <div class="user_info">    
    
	<?php	echo $v["USER_NAME"];?><br>
        
        
        PHONE:<?php	echo $v["PHONE"];?>
    </div>    
        <?php
	}
        
              
?> 
          
    </body>
</html>