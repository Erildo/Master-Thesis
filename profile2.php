<?php  include_once "menuafter2.php";
if(!isset($_SESSION['email'])){
      header("location:login.php");
   }
 include_once ('cvview.php'); ?>
 

<div style=" float:left;  ">
<?php include_once('profilewrapper2.php')?>


<div class="wrapper3" style="margin-left: 100px;">
<p style="color:white; font-weight:bold; margin-top:10px;"> Description </p></div>

<div class="wrapper2" style="	margin-left: 100px;">
<p class="article2">
<?php  echo $_SESSION['description']; ?>
</p>
 
</div>
</br>
<div style="margin-left: 100px;">
<?php include_once "jobsechoprofile2.php";?>

<?php include_once "jobsechoprofile.php";?>

</div>
 </br>
 </br>
 </div>
 <div style="float:right; margin-top:70px; width:600px;">
 Your jobs: <a href="http:/su/jobinsert.php">+ New Job</a></br></br>

 <?php include_once "jobsechouser.php";?>
</div>
</div>
		</body>
		
		 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>

<style>
.description{
margin-top:20px;

}
body{
background-color:white;
font-size: 16px;
}
.sub{
	margin-left:75px;
		    font-size: 12px;

	
}
	.name{
	 font-family:Georgia,serif;
	color:black;
	font-variant: small-caps;
	text-transform: none; 
	font-weight: 100; 
	margin-bottom: 0;
	margin-left:100px;
	    font-weight:bold;
	    font-size: 18px;

}
	.description{
	font-family: "Helvetica Neue", "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
        font-size: 14px;
        margin-top: .5em;
		margin-left:0px;
		color: #666;
		width:500px;
		}
		.gen{	font-family: "Helvetica Neue", "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
 font-size: 14px;
font-style: italic;
			
		}
</style>
