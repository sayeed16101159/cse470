<html>
    <head>
        <title>Profile</title>
        <style>
            .user_info{
                padding-top: 10px;
            }
            *{
                
                list-style: none;
            }
            .header a{
                padding: 5px;
                text-decoration: none;
                color: white;
                background-color: cornflowerblue;
            }
            .header ul li{
            float: left;
            }
            .maindiv{
                width: 100%;
                overflow: hidden;
            }
            .add{
                float: right;
                overflow: hidden;
                
            }
            .logout{
                float: right;
            }
            .mainContain
{
    overflow: hidden;
  height: 1110px;
  width :80%;
  margin: auto;
  background-color: #f2f2f2;
  overflow: hidden;
  float: left;

}
        </style>
         

    </head>
    <body>
        <form class="logout" action="logout.php" method="post">
	<input type="submit" name="submit" value="log out">
	</form>
   <div class="header">
       <ul>
       <li><a href="home.php">HOME</a></li>
        <li><a href="update1.php">EDIT PROFILE</a></li>
        <li><a href="uploadproduct.php">Upload Product</a></li>   
       </ul>
    </div>     
<?php
   require("db.php");
       session_start();
        if(isset($_SESSION["uid"])){
	}
else{
	header("location:login1.php");
}
   /* $jsonData= getJSONFromDB("select USER_NAME,EMAIL,PHONE from user_information where USER_ID='".i."'");
    $jsn=json_decode($jsonData,true);*/
    /*$conn = mysqli_connect("localhost", "root", "","ecommerce");
	$sql="select USER_NAME,EMAIL,PHONE from user_information where USER_ID='".$i."'";
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));*/
    $sql="select USER_NAME,EMAIL,PHONE from user_information where USER_ID='".$_SESSION["uid"]."'";
	$a=getfromDB($sql);
	
	/*foreach($a as $v) {
		echo "<p>".$v["USER_NAME"]." with cgpa : ".$v["EMAIL"]."</p>";
	}*/
	foreach($a as $v) {?>
    <div class="user_info">     
    <h2 >
	<?php	echo $v["USER_NAME"];?>
        </h2>
        <?php	echo $v["EMAIL"];?><br>
        <?php	echo $v["PHONE"];?>
    </div>    
         <?php
	}
        
              
?> 
<div class="maindiv">        
 <div class="mainContain">
    <?php
         $d=0;
         $sql="select PRODUCT_ID,BRAND,MODEL,PRICE,IMAGE_PATH from product_information where USER_ID='".$_SESSION["uid"]."' and DELETE_PRODUCT='".$d."'";
	$a=getfromDB($sql);
        foreach(array_reverse($a) as $v) {?>
     <a href="updateproduct.php?pid=<?php echo $v["PRODUCT_ID"];?>">
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
     
</div>
   
       </div>
    </body>    
</html>	           
               
