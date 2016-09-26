<?php 

    if(!isset($_SESSION)) 
    { include('sessions.php');
    } 
?>
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
		color:gray;
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
</style>
<?php  
if($_SESSION["type"]=="user")

include_once "menuafter.php";
else 

include_once "menuafter2.php";

?>
<div class="job">
<?php
	 
    $query="SELECT * FROM jobs where id='".$_REQUEST["id"]."'";
	$result_set=mysqli_query($connection,$query);
	if (!$result_set) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
    while($row=mysqli_fetch_array($result_set)){
        echo "
		<table>
<tr>
    <th id='p1'> $row[1] </th></tr>
	<tr>
    <td id='p3'>Location : $row[3]</td></tr>
	<tr>
	
    <td id='p2'>$row[2]</td></tr>
<tr>";?>
<?php
if($_SESSION['type']=='user')
	echo"
<td id='p2'>
<a href='counttest.php?id=$row[0]' >Take the Test</a>
</td>
</tr>
 ";         
    }
    echo'</table>';
    
    mysqli_close($connection);
?>





</div>