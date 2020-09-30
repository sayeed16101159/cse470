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
    <meta charset="utf-8">
    <title>Update Profile</title>

    

    <link rel="stylesheet" href="updatep.css">




<script type="text/javascript">
function validate(){
  var flag=true;
  
  
  m1 = document.getElementById("msg1");
    m2 = document.getElementById("msg2");
    m3 = document.getElementById("msg3");
    m4 = document.getElementById("msg4");
  m1.innerHTML="";
  m2.innerHTML="";
  m3.innerHTML="";
  m4.innerHTML="";
      m=document.fm.phone.value/1000000000;
    //alert(m);
    if(m<9 && m>1)
    {
    flag=true;
    }
    else
    {
    
    document.fm.phone.style.border="1px solid red";
    m1.innerHTML="phone number must be 11 charcters";
    m1.style.color="red";
    flag=false;
     }
  
 /* if(document.fm.txt1.value.length!=11){
    document.fm.txt1.focus();
    m1.style.color="red";
    document.fm.phone.style.border="1px solid red";
    m1.innerHTML="  Phone number must be 11 digit";
    flag=false;
  }*/

  if(document.fm.txt2.value.length <8){
    document.fm.txt2.focus();
    m2.style.color="red";
    document.fm.oldpassword.style.border="1px solid red";
    m2.innerHTML="  Password must be 8 charcters";
    flag=false;
  }


  if (document.fm.txt3.value.length <8){
    document.fm.txt3.focus();
    m3.style.color="red";
    document.fm.newpassword.style.border="1px solid red";
    m3.innerHTML="  Password must be 8 charcters";
    flag=false;
  }



  if (document.fm.txt4.value.length <8){
    document.fm.txt4.focus();
    m4.style.color="red";
    document.fm.confirmpassword.style.border="1px solid red";
    m4.innerHTML="  Password must be 8 charcters";
    flag=false;
  }

  return flag;
}
function phn(){
        mn = document.getElementById("msg1");
        mn.innerHTML=" ";
        document.fm.phone.style.border="1px solid black";
    }
function op(){
        mn = document.getElementById("msg2");
        mn.innerHTML=" ";
        document.fm.oldpassword.style.border="1px solid black";
    }
    function np(){
        mn = document.getElementById("msg3");
        mn.innerHTML=" ";
        document.fm.newpassword.style.border="1px solid black";
    }
    function cp(){
        mn = document.getElementById("msg4");
        mn.innerHTML=" ";
        document.fm.confirmpassword.style.border="1px solid black";
    }

  </script>  
  </head>
  <body>
    <div class="main">
      <div class="mid">
  			<div class="header">
  				<h1>change profile</h1>
  			</div>

            <div class="contain">
              <form id="fm"action="update.php" method="post" enctype="multipart/form-data" name="fm">
                <div class="middle">
                  <input type="text" onkeyup="phn();" name="phone"  placeholder="Phone Number" id="txt1"><span id="msg1"> </span>
                    <br>
                    <br>
                  <input type="password" onkeyup="op();" name="oldpassword"  placeholder="Old Password" id="txt2" ><span id="msg2"> </span>
                    <br>
                    <br>
                  <input type="password" onkeyup="np();" name="newpassword"  placeholder="New Password" id="txt3"><span id="msg3"> </span>
                  <br>
                  <br>
                  <input type="password" onkeyup="cp();" name="confirmpassword"  placeholder="Confirm Password" id="txt4"><span id="msg4"> </span>
                  <br>
                  <br>
                  <input type="submit" onclick="return validate();" name="submitt" value="Submit">
                </div>
      				</form>
            </div>
  		</div>
    </div>


	</body>
</html>
