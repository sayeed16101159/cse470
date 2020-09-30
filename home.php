<!DOCTYPE html>
<html>
  <head>
      <title>HOME</title>
    <script>
    function showHint() {
    	var  xmlhttp = new XMLHttpRequest();
    	var str=document.getElementById('mytext').value;

    	//document.getElementById("spinner").style.visibility= "visible";
    	xmlhttp.onreadystatechange = function() {
    		//alert(xmlhttp.rxmlhttpeadyState);
    		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    			//document.getElementById("spinner").style.visibility= "hidden";
    			var m=document.getElementById("txtHint");


    			m.innerHTML=xmlhttp.responseText;
    		}
    	};
     	//var url="data.php?pname="+str;
    	//alert(url);
    	//xmlhttp.open("GET", url,true);
    	//xmlhttp.send();
    	var url="data.php"
    	xmlhttp.open("POST", url, true);
    	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    	xmlhttp.send("pname="+str);

    }
    </script>
    <meta charset="utf-8">
    <link href="home.css" rel="stylesheet" type="text/css">


  </head>
  <body>

    <h1>Bechakena.com</h1>
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

</div>
<div class="search">
    <div class="sub">
      <br>
      <br>
      <span>Search</span> : <input type="text" name="text" onkeyup="showHint()" id="mytext" >

      <p id="txtHint"></p>
    </div>
</div>

  </body>
</html>
