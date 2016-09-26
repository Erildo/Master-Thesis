<?php

include('db.php');
if(isset($_POST['action']))
{          
   
    if($_POST['action']=="signup")
    {
        $name       = mysqli_real_escape_string($connection,$_POST['name']);
		if (strlen($name) ==0) {
 echo '<script>
             alert("Name cant be empy");
          </script>';
	    exit();
    }
        $email      = mysqli_real_escape_string($connection,$_POST['email']);
		if (strlen($email) ==0) {
 echo '<script>
             alert("Email cant be empy");
          </script>';
	    exit();
    }
        $telephone      = mysqli_real_escape_string($connection,$_POST['telephone']);
		if (strlen($telephone) ==0) {
 echo '<script>
             alert("Telephone cant be empy");
          </script>';
	    exit();
    }
        $password   = mysqli_real_escape_string($connection,$_POST['password']);
		if (strlen($password) ==0) {
 echo '<script>
             alert("Password cant be empy");
          </script>';
	    exit();
    }
        $country   = mysqli_real_escape_string($connection,$_POST['country']);
        $description   = mysqli_real_escape_string($connection,$_POST['description']);
		if (strlen($description) <150 or  is_null($description)) {
 echo '<script>
             alert("We need those 150 for analysys");
          </script>';
	    exit();
    }

	    $type   = mysqli_real_escape_string($connection,$_POST['type']);

        $query = "SELECT email FROM users where email='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        if($numResults>=1)
        {
                       echo" Email already exist!!";
        }
        else
        {
mysqli_query($connection,"insert into users(name,email,password,country,description,type,telephone) 
values('".$name."','".$email."','".md5($password)."','".$country."','".$description."','".$type."','".$telephone."')");
          echo   '<script>
             alert("Registration Succesful");
			 window.location="login.php";
			 
          </script>';
			
        }
    }
}


echo '
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<style>
body{
    background-image: url("resumecv.jpg");
	    background-repeat: no-repeat;

}
div{
margin-left:150px; 
margin-top:100px;
}
</style>'?>
<?php 

include 'menu.php';
echo'
<body>
 <form class="pure-form pure-form-stacked" action="" method="post">
      <fieldset>
  <div  class="pure-control-group">
    
	<p><input id="name" name="name" type="text" placeholder="Name"></p>
    
	<p><input id="email" name="email" type="email" placeholder="Email"></p>
    
	<p><input id="password" name="password" type="password" placeholder="Password"></p>
	<p><input id="telephone" name="telephone" type="text" placeholder="Telephone" value="+355"></p>

	
	
	
	<select id="country" name="country" >
<option value="Albania">Albania</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Canada">Canada</option>
<option value="USA">USA</option>

<option value="Mexico">Mexico</option>
<option value="Denmark">Denmark</option>
<option value="Netherlands">Netherlands</option>

<option value="China">China</option>
<option value="Japan">Japan</option>
<option value="Singapore">Singapore</option>
<option value="Russia">Russia</option>
  </select>
    <textarea class="pure-input-1-2" id="description" name="description" placeholder="Description should be more than 300 words!" rows="6" cols="50"></textarea>


	
	<select id="type" name="type">
            <option>user</option>
            <option>Co</option>
        </select>

    <input name="action" type="hidden" value="signup" />
    <input class="pure-button pure-button-primary" type="submit" value="Signup" />
     <fieldset>
  </form>
  </div>
</div>
</body>';
?>