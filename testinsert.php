<?php 
include_once('menuafter2.php');
$jobid=$_REQUEST['jobid'];
 $query="SELECT * FROM test where jobid='".$jobid."'";
	$result=mysqli_query($connection,$query);
 $row=mysqli_num_rows($result);
		if($row > 0) 
		{	echo '
			<script>
             alert("This job already has a test! You will be redicted to Your profile");
		  var timer = setTimeout(function() {
            window.location="profile2.php"
        }, 1000);          
		</script>
';}
?>
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<style>
div{
margin-left:150px; 
margin-top:70px;
}
</style>

<body>   


 <form class="pure-form pure-form-stacked" action="jobaction.php" method="POST">
      <fieldset>
	  
  <div  class="pure-control-group">
      <input id="jobid" name="jobid" type="text" value="<?php
$jobid=$_REQUEST['jobid'];
	  echo $jobid; ?>
	  "; readonly>

    <input id="time" name="time" type="text" placeholder="Time">
</select>
    <textarea class="pure-input-1-2" id="description" name="description" placeholder="Description"></textarea>
 <input class="pure-button pure-button-primary" name="insert" type="submit" id="insert" value="insert" />
	<fieldset>
  </form>
  </div>
</div>
</body>