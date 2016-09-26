<?php 
include('sessions.php');
$type=$_SESSION["type"];
if($type=="Co")
{  
header("location:logout.php");
	}

?>