<?php include('usertype.php');  ?>
<style>

.job{
		width:500px;
		height:60px;	
		margin: 0px auto 0;
		margin-top:70px;
        line-height:0.9;
}
	#p1{
	font-family: Arial,sans-serif;
    color:blue;
	font-size:16px;
    font-weight:bold;
	}
	#p2{
		color:black;
	}
	#p3{
		color:red;
	}
	
	#p5{
		font-family: Arial,sans-serif;
    font-size: 10pt;
    line-height: 1.3;
	color:gray;
		
	}
	#p7{
		color:#F88017;
		    font-weight:bold;

		
	}
	body {
   background-image:url("jobsearch.png");
    background-repeat: no-repeat;
}​
</style>
<body>
<?php include_once "menuafter.php"?>
<div class="sugestions"style="margin-top:70px;margin-left:20px; position:relative; float:left">

</div>
<div class="job">
<?php include('jobsecho.php');  ?>
</div>
</body>