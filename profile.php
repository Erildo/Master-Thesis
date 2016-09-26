<?php  
   include('sessions.php');

include_once "menuafter.php";

 include_once ('cvview.php'); 

 ?>

<head>
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="profilecss/style.css">
	

  </head>
  <body>
  <div class="allinclusive" style="margin-top:70px;">
<div style="width: 50%; float:right; margin-right:100px;  width:500px; ">
<a href="http://localhost/su/skillinsert.php">Your files</a>

<a href="http://localhost/su/skillinsert.php">Skills</a>
</br>
</br>
<?php include_once "skillecho.php";?>
</br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br>
<?php include_once "lasttesting.php";
include_once "lasttesting2.php";

?>

 </div>
 
 <div style="width:300px;">
 
<?php include_once('profilewrapper.php')?>


</div>


<div style=" margin-left:100px; ">

<div class="wrapper3"><p style="color:white; font-weight:bold; margin-top:10px;"> Description </p></div>

<div class="wrapper2">
<p class="article2">
<?php  echo $_SESSION['description']; ?>
</p>
 
</div>
		</body>
		
		 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
		

<style>
body{
background-color:#f5f5f0;
}	
</style>
