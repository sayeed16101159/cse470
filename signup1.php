<?php
   require("db.php");
       session_start();
        if(isset($_SESSION["uid"])){
            header("location:profile.php");
	}
else{
	
}?>
<html>
<head>
    <title>Sign Up</title>
<script type="text/javascript">
	function validation(){ 
	
	var flag=true;
	md = document.getElementById("msgd");
	mg = document.getElementById("msgg");
	mpw = document.getElementById("msgpw");
	mcpw = document.getElementById("msgcpw");
	mn = document.getElementById("msgn");
	mp = document.getElementById("msgp");
	me = document.getElementById("msge");
	mp.innerHTML="";
	mn.innerHTML="";
	me.innerHTML="";
	mpw.innerHTML="";
	mcpw.innerHTML="";
	md.innerHTML="";
	mg.innerHTML="";
        m=document.fm.phone.value/1000000000;
    //alert(m);
    if(m<9 && m>1)
    {
    flag=true;
    }
    else
    {
    
    //document.fm.phone.style.border="1px solid red";
    msgp.innerHTML="phone number must be 11 charcters";
    flag=false;
     }
        if (/^\w+([\.-]?\ w+)*@\w+([\.-]?\ w+)*(\.\w{2,3})+$/.test(document.fm.email.value)){
     flag=true;
     }
     else 
     
     {//document.fm.day.focus();
    
    //document.fm.phone.style.border="1px solid red";
    me.innerHTML="provide email id";
    flag=false;
    }
	if(document.fm.name.value.length == 0){
		document.fm.name.focus();
		mn.innerHTML="must give a name";
		flag=false;
	}
	 if(document.fm.day.value == "day" || document.fm.day.value == "month" || document.fm.day.value == "year"){
		
		md.innerHTML="select date";
		flag=false;
	}
	 if (document.fm.male.checked == false && document.fm.female.checked == false){
		mg.innerHTML="Select gender";
		flag=false;
	}
	 if(document.fm.phone.value.length !=11){
		document.fm.phone.focus();
		mp.innerHTML="Invalid Number";
		flag=false;
	}
	 /*if(document.fm.email.value.length==0){
		document.fm.email.focus();
		me.innerHTML="cant be empty";
		flag=false;
	}*/
	 if(document.fm.password.value.length<8){
		document.fm.password.focus();
		mpw.innerHTML="Minimum 8 Character";
		flag=false;
	}
	 if(document.fm.confirmpassword.value.length<8){
		document.fm.confirmpassword.focus();
		mcpw.innerHTML="minimum 8 character";
		flag=false;
	}
	
	return flag;
}
    function name1(){
        mn = document.getElementById("msgn");
        mn.innerHTML=" ";
    }
    function phone1(){
        mn = document.getElementById("msgp");
        mn.innerHTML=" ";
    }
    function email1(){
        mn = document.getElementById("msge");
        mn.innerHTML=" ";
    }
    function pass1(){
        mn = document.getElementById("msgpw");
        mn.innerHTML=" ";
    }
    function con1(){
        mn = document.getElementById("msgcpw");
        mn.innerHTML=" ";
    }
</script>
<title>
</title>
</head>
<body>
	<form action="signup.php" method="post" enctype="multipart/form-data" name="fm" id="fm">
	<div align="center" style="padding-right:20px;">
	<h1  >Sign up</h1>
	<h5><a href="home.php">Home</a></h5>
	</div>	
	<div align="center" style="padding-top:50px;padding-left:80px">
		<table style="width:40%" cellpadding="15">
	<tr><td><b>Name:</b></td>
		<td><input type="text" onkeyup="name1();" name="name" id="name"><span id="msgn"></span></td>
	</tr>
	
	<tr><td><b>Birthday</b></td>
	<td style=""><select name="day" id="day"><option value="day">Day</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			</select>
			<select name="month" id="month"><option value="month">Month</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			</select>
			<select name="year" id="year" ><option value="year">Year</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
			<option value="2006">2006</option>
			<option value="2007">2007</option>
			<option value="2008">2008</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			</select>
			<span id="msgd" ></span>
			</td>
	</tr>
	<tr><td><b>Gender</b></td>
		<td><input type="radio" name="gender"  value="male" id="male">Male <input type="radio" name="gender"  value="female" id="female">Female  <span id="msgg" ></span></td>
	</tr>
	<tr><td><b>Phone:</b></td>
	<td><input type="text" onkeyup="phone1();" name="phone" id="phone"><span id="msgp"></span></td>
	</tr>
	<tr><td><b>Email ID:</b></td>
	<td><input type="text" onkeyup="email1();" name="email id" id="email"><span id="msge"></span></td>
	</tr>
	<tr><td><b>Password:</b></td>
	<td><input type="password" onkeyup="pass1();" name="password" id="password"><span id="msgpw"></span></td>
	</tr>
	<tr><td><b >Confirm Password:</b></td>
		<td><input  type="password" onkeyup="con1();" name="ConfirmPassword" id="confirmpassword"><span id="msgcpw"></span></td>
		</tr>
	
	<tr><td><input type="submit" onclick="return validation();" value="Submit" name="submit" ></td></tr>
	</table>
	</div>
	</form>
</body>
</html>