<html>
<head>
<title>Login Page</title> <!--title halaman web-->
</head>

<style type="text/css">

*{font-family: Segoe UI, Tahoma;
margin: auto;
padding:0;

}

#container{
margin: 20px auto;
width: 15%; 
height: auto;
padding: 10px; 
border: 1px solid blue; 
}

.textinput{
width: 100%; 
height: 30px;
margin: 5px auto;
}

.btn{
width: 100%;
padding: 5px;
background-color: #6eb7e1; 
border: none; 
color: white;
font-weight: 900; 

}

.btn:hover{
cursor: pointer;

}

a{
font-size: 11px; 
color: white; 
}

.textinput{
background-color: #fafafa; 
border: inset 1px #efefef; 
}
</style>
<script>

function cekhuruf(huruf) 
{
cek = /^[A-Za-z]{1,}$/;
return cek.test(huruf);
}

function validateForm()
{
var username=document.forms["myForm"]["username"].value;
var pass=document.forms["myForm"]["pass"].value;

if ((username==null || username=="")||(pass==null|| pass==""))
  {
  alert("Username dan Password harus diisi dengan huruf"); 
   document.getElementById("username").focus(); 
  return false;
  }
  
  if(cekhuruf(username)=== false ||cekhuruf(pass)===false) 
  {
   alert("Username dan password harus berupa huruf"); 
   document.getElementById("pass").focus();
   return false;
  }


 
  return true;
}
</script>
<body>
<div id="container">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="myForm" onsubmit="return validateForm()">
<input type="text" name="username" class="textinput" id="username" /> 
<input type="password" name="pass" class="textinput" id="pass"/> 
<input type="submit" name="submit" value="sign in" class="btn"/> 
</form>
</div>

<?php
if (isset($_POST['submit'])) {
if ((isset($_POST['username'])&&$_POST['username']=='vicka')&&(isset($_POST['pass'])&&$_POST['pass']=='qwerty')) 
{
echo "<center>LOG IN BERHASIL. Selamat datang, ". $_POST['username']."</center>"; 
}
else{
echo "<script>alert('Username dan password salah. Periksa Kembali')</script>"; 
}
}
 ?>

</body>
</html>