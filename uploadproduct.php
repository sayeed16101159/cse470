<?php 
     session_start();
        if(isset($_SESSION["uid"])){
	}
else{
	header("location:login1.php");
}
?>
<html>
    <head>
                      <script type="text/javascript">
function validate(){
    var flag=true;
   

    m = document.getElementById("msg1");
    m.innerHTML="";
    document.fm.productname.style.border="1px solid black";
    
    m1 = document.getElementById("msg2");
    m1.innerHTML="";
    
    m2 = document.getElementById("msg3");
    m2.innerHTML="";
    document.fm.brand.style.border="1px solid black";
   
    m3 = document.getElementById("msg4");
    m3.innerHTML="";
    document.fm.model.style.border="1px solid black";
    
    m4 = document.getElementById("msg5");
    m4.innerHTML="";
    document.fm.usetime.style.border="1px solid black";

    m5 = document.getElementById("msg6");
    m5.innerHTML="";
    document.fm.price.style.border="1px solid black";

    m6 = document.getElementById("msg7");
    m6.innerHTML="";
    document.fm.details.style.border="1px solid black";
    
    
    
    
    
    
    if(document.fm.productname.value.length==0){
        document.fm.productname.focus();
        m.style.color="red";
        document.fm.productname.style.border="1px solid red";
        m.innerHTML="you must type something";
        flag=false;
    }


     if(document.fm.type.value=="0"){
        m1.style.color="red";
        
        m1.innerHTML="invalid type";
        flag=false;
    }
    

   if(document.fm.brand.value.length==0){
        document.fm.brand.focus();
        m2.style.color="red";
        document.fm.brand.style.border="1px solid red";
        m2.innerHTML="you must type something";
        flag=false;
    }
    
   if(document.fm.model.value.length==0){
        document.fm.model.focus();
        m3.style.color="red";
        document.fm.model.style.border="1px solid red";
        m3.innerHTML="you must type something";
        flag=false;
    }
   if(document.fm.usetime.value.length==0){
        document.fm.usetime.focus();
        m4.style.color="red";
        document.fm.usetime.style.border="1px solid red";
        m4.innerHTML="you must type something";
        flag=false;
    }
    

   if(document.fm.price.value.length==0){
        document.fm.price.focus();
        m5.style.color="red";
        document.fm.price.style.border="1px solid red";
        m5.innerHTML="you must type something";
        flag=false;
    }

   if(document.fm.details.value.length==0){
        document.fm.details.focus();
        m6.style.color="red";
        document.fm.details.style.border="1px solid red";
        m6.innerHTML="you must type something";
        flag=false;
    }
    

    return flag;
}

</script>

    </head>
    <body>
    <div class="add">
      <form id="fm" action="Upload.php" method="post" enctype="multipart/form-data" name="fm" >
        <h2>Upload Product</h2>
          <table style="width:20%" cellpadding="15">
            <tr><td>Prodeuct Name</td>
                <td><input type="text" name="productname"><span id="msg1"></span></td></tr>
            <tr><td>Prodeuct Type</td>
                <td><select name="type">
                        <option value="0">Type</option>
                        <option value="1">Electronics</option>
                        <option value="2">Car</option>
                        <option value="3">Furniture</option>
                        <option value="4">Motor Cycle</option>
                        <option value="5">Mobile & Tablet</option>
                        <option value="6">Computer</option>
                        <option value="7">Computer Accessories</option>
                    </select><span id="msg2"></span></td></tr>
                <tr><td>Brand</td>
                <td><input type="text" name="brand"><span id="msg3"> </span></td></tr>
                <tr><td>Model</td>
                <td><input type="text" name="model"><span id="msg4"> </span></td></tr>
                <tr><td>Use Time</td>    
                <td><input type="text" name="usetime"><span id="msg5"> </span></td></tr>
                <tr><td>Price</td>
                <td><input type="text" name="price"><span id="msg6"> </span></td></tr>
               <tr><td>Product Details</td>
                <td><textarea name="details" rows="8" cols="22"></textarea><span id="msg7"> </span></td></tr>
              <tr><td>Image</td><td><input type="file" name="fileToUpload"></td></tr>
                <tr><td><input type="submit" onclick="return validate();" value="submit" name="submit"></td></tr>
            </table>
        </form>
        </div>
  
    
    </body>
</html>