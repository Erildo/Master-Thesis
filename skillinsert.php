<?php 
session_start();
include_once "db.php";
include_once "menuafter.php";
$query="SELECT userid FROM skills where userid='".$_SESSION['id']."'";
	$result=mysqli_query($connection,$query);
 $row=mysqli_num_rows($result);
  
		if($row > 2) {
			 echo '<script>
             alert("You have 3 records!Click next!");
          </script>';
		  
		}



?>
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<style>
.pure-control-group{
margin-left:150px; 
margin-top:70px;
float:left;
}
	body{
    background-image: url("skill.png");
	    background-repeat: no-repeat;
}
</style>

<body>   
 <div style="float:right; margin-top:70px; margin-right:150px; ">
		<?php
		if($row > 0) {
		include_once 'skillview2.php';
		echo'<a class="pure-button pure-button-primary" href="fileupload.php">Next Page</a>';
}?>
<br>

</div>

 <form class="pure-form pure-form-stacked" action="skillaction.php" method="POST">
      <fieldset>
  <div  class="pure-control-group">	 
  <h2>Please insert at least 3 types of skills!</h2>
<p><input id="name" name="name" type="text" placeholder="Skill"></p>
    	<p><input id="skillmastery" name="skillmastery" type="text" placeholder="ex:67%"></p>
 <input class="pure-button pure-button-primary" name="insert" type="submit" id="insert" value="insert" />
</fieldset>
  </form>
  </div>
 
  </body>