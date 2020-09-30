<?php
   require("db.php");
       session_start();
        if(isset($_SESSION["uid"])){
            header("location:profile.php");
	}
else{
	
}?>
<html>
    <head><title>Log In</title>  
    <link rel="stylesheet" href="style.css  ">
        <script>
            function val(){
                var flag=true;
                m1 = document.getElementById("msg1");
                m2 = document.getElementById("msg2");  
                m1.innerHTML="";
                m2.innerHTML="";
                if(document.fm.txt1.value.length==0){
                document.fm.txt1.focus();
                m1.style.color="red";
              document.fm.email.style.border="1px solid red";
              m1.innerHTML="empty field";
              flag=false;
         }

  if(document.fm.txt2.value.length <8){
    document.fm.txt2.focus();
    m2.style.color="red";
    document.fm.password.style.border="1px solid red";
    m2.innerHTML="  Password must be 8 charcters";
    flag=false;
  }
                return flag;
            }
        </script>
    </head>
<body>
    <div class="login-page">
    <div class="form">
        <form class="register-form" action="login.php" method="post" name="fm" id="fm">
        <input type="text" name="email" placeholder="Email" id="txt1"><span id="msg1"> </span>
            <input type="password" name="password" placeholder="Password" id="txt2"><span id="msg2"> </span>
            <div class="button">
            <input  type="submit" onclick="return val();" name="submit" value="Log In">
                </div>
            <p class="message">Not Registard?<a href="signup1.php">Sign Up</a>
            <br><a href="home.php">Home</a></p>
        </form>    
    </div>     
    </div>
    </body>
</html>