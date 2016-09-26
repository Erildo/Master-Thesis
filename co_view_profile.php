<?php  session_start();
include_once "menuafter2.php";
 include_once ('cvview2.php');
include_once('co_user_echo.php'); ?>

<head>
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="profilecss/style.css">

  </head>
  <body>
  <div class="allinclusive" style="margin-top:70px;">
<div style="width: 50%; float:right; margin-right:100px;  width:500px; ">

<a>Skills</a>
</br>
</br>
<?php include_once "skillecho2.php";?>
</br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br>
<?php include_once ('view2.php'); ?>

 </div>
 
 <div style="width:300px;">
 
<?php include_once('profilewrapper3.php')?>


</div>


<div style=" margin-left:100px; ">

<div class="wrapper3"><p style="color:white; font-weight:bold; margin-top:10px;"> Description </p></div>

<div class="wrapper2">
<p class="article2">
<?php  echo $description; ?>
</p>
 </div>
 </br>
 <?php 
 if (isset($_REQUEST["jobid"])) {
 include_once('jobecho2.php');
 echo "<a  href='score.php?id=<?php  echo $userid ?>&jobid=<?php  echo $jobid ?>'>Submit score for his TEST</a>";
 }?>
		</body>
		
		 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
		

<style>
body{
background-color:#f5f5f0;
font-size: 16px;
}

.sub{
	margin-left:75px;
	 font-size: 12px;	
}
</style>
