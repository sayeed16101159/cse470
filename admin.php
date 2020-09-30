<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">
    <link href="admin.css" rel="stylesheet" type="text/css">


  </head>
  <body>

    <div class="shakil">


    </div>
    <div class="manu">
      <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="#">About us</a></li>
        <div class="space">
          <li><a href="LogIn.html">Log Out</a></li>

        </div>

       </ul>

    </div>
<div class="blank">
  <!--blank space in this fieald-->
</div>
<div class="filter">

</div>


<div class="mainContain" style="width:60%;">

    <?php
         require("db.php");
     $d=0;
         $sql="select PRODUCT_ID,BRAND,MODEL,PRICE,IMAGE_PATH from product_information where DELETE_PRODUCT='".$d."'";
	$a=getfromDB($sql);
        foreach(array_reverse($a) as $v) {?>
    <a href="viewproduct.php?pid=<?php echo $v["PRODUCT_ID"];?>">
    <div class="product" style="border: 1px solid black; margin:5px;">
     <img src="<?php echo $v["IMAGE_PATH"];?>" alt="img" style="height:100px; width:100px;  padding:5px; ">
	  BRAND:<?php	echo $v["BRAND"];?>

      MODEL:<?php	echo $v["MODEL"];?>
        PRICE:<?php	echo $v["PRICE"];?>
    </div>
         </a>
        <?php
	}


?>


  </body>
</html>
