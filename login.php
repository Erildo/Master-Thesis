<?php
session_start();
 if(isset($_SESSION['email'])){
      header("location:logout.php");
   }
include('db.php');
if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $strSQL = mysqli_query($connection,"select * from users where email='".$email."' and password='".md5($password)."'");
        $row = mysqli_fetch_array($strSQL);
 if(count($row)>=1)
{

$_SESSION["email"] = $row['email'];
$_SESSION["name"] = $row['name'];
$_SESSION["id"] = $row['id'];
$_SESSION["description"] = $row['description'];
$_SESSION["country"] = $row['country'];
$_SESSION["type"] = $row['type'];
$_SESSION["telephone"] = $row['telephone'];
echo "succ";
}
 else
	 {
 echo '<script>
             alert("Wrong Credencials");
          </script>';

}
}
if(isset($_SESSION["email"])) {
	if($_SESSION["type"]=="user"){
header("Location:cvinsert.php");
}
			else
			{
header("Location:profile2.php");
}
			
    }


}
include "menu.php";

echo '<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</script>

</head>
<style>  
    div {  
      background: white;  
    align: center;
	width:250px;
	height:250px;
      padding-top: 20px; 
      padding-left: 30px; 
	      margin-left: 500px;
    }  
	 
	body{
    background-image: url("login.png");
	    background-repeat: no-repeat;

}
	 .tre {
margin-left: 570px;
 margin-top: 100px;


}
	 </style>
    <body>     
<img src="../su/job.png" class="tre" width="120" height="120">
  <form class="pure-form pure-form-stacked" action="" method="post">
      <fieldset>
  <div class="pure-control-group">
        <label for="email">Email</label>
 <input id="email" name="email" type="text" placeholder="Email">
	        <label for="email">Password</label>
  <input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="login" />
	</br>
    <input class="pure-button pure-button-primary" type="submit" value="Login" />
		</br></br>Register.Do it <a href="signup.php">here!</a>

	    </fieldset>

  </form>
  </div>
</body>';

?>