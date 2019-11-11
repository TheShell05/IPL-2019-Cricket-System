<!DOCTYPE html>
<html>
<?php
$lerrs="";
$lerr="";
$lerr1="";
$lerrs1="";

 include 'conn.php';
if (isset($_POST['login'])){
  $a=$_POST["luser"];
  $b=$_POST["lpsw"];
  
    $q="select pass from shelsign where username='$a';";
    $result = mysqli_query($con,$q);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          $check=$row["pass"];
            if($check==$b){
              $lerr=$lerrs=$lerr1=$lerrs1="";
              header('Location:index.html');
              
             }
             else{
              $lerr="Invalid Password!";
             }
        }
    }
    else {
      $lerr="Invalid UserID!";
    }
  }


elseif(isset($_POST['signup'])){
  $a=$_POST["username"];
  $b=$_POST["sname"];
  $c=$_POST["spsw"];
  $q="select name from shelsign where username='$a';";
  $result = mysqli_query($con,$q);
  if (mysqli_num_rows($result) > 0) {
    $lerr="Registration Failed !";
    $lerr1="Username taken !";
    }
  else {
  $lerrs="Registration Successfull !";
  $lerrs1="Now Login";
  $q="insert into shelsign(name,username,pass) values('$b','$a','$c');";
  mysqli_query($con,$q) or die(mysqli_error);


  }
}
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="signin.css">
</head>
<body>
<div class="bg-img"></div>
<div class="container">
	<table border=0>
		<col width="135"><col width="150">
		<tr><td>
 <form id="log" action="#" method="post" >
    <h1>Login</h1>
    <p id="le" class="error"><?php echo ($lerr."<br>".$lerr1);?></p>
    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter UserId" name="luser" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="lpsw" required>
    <br><br><br><br><br><br>
    <button type="submit" name="login" class="btn">Login</button>
  </form></td><td>
<form id="sig" action="#" method="post" onsubmit="return validateForm()">
    <h1>Sign Up</h1>
    <p id="le" class="success"><?php echo ($lerrs."<br>".$lerrs1);?></p>
    <p id="seu" class="error"></p><p id="sep" class="error"></p>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="sname" required>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter UserId" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="spsw" required>

    <button type="submit" name="signup"class="btn">Sign Up</button>
  </form></td></tr></div>

  <script type="text/javascript">


    function validateForm() {
      var x = document.forms["sig"]["username"].value;
      var y = document.forms["sig"]["spsw"].value;
    
      if (x.length < 8) {
      document.getElementById("seu").innerHTML = "Username should be atleast 8 characters !";
      return false;
      }
      if (y.length < 8) {
      document.getElementById("sep").innerHTML = "Password should be minimum 8 characters !";
      return false;
      }
      if (!(y.match(/[0-9]/g))) {
      document.getElementById("sep").innerHTML = "Password should contain a Number !";
      return false;
      }
      
     
      
    }

  </script>
</body>
</html>
