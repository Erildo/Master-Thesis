<?php

if($experience !='student')
{ 
$query="SELECT *
	FROM jobs
	WHERE jobs.country LIKE '%$country%'
	AND   jobs.salary > '%$salary%'
	limit 2";
	$result_set=mysqli_query($connection,$query);
    
    while($row=  mysqli_fetch_array($result_set)){
        echo 
		"<table>
     <tr>
    <th id='p1'> $row[1] </th></tr>
	<tr>
    <td id='p3'>Location : $row[3]</td></tr>
	<tr>
	
    <td id='p2'>";
	
 echo substr($row[2],0,150); echo"...</td></tr>
<tr>
    <td id='p2'>
<a href='fulljob.php?id=$row[0]' >More info</a>
</td>
</tr>
		
    ";         
    }
    echo'</table>'
	;
}

else if($experience='student')
{ 
$query="
	SELECT *
	FROM jobs
	WHERE jobs.country LIKE '%$country%'
	AND   jobs.salary > '%$salary%'
	limit 2
	";
	$result_set=mysqli_query($connection,$query);
    
    while($row=  mysqli_fetch_array($result_set)){
        echo 
		"<table>
     <tr>
    <th id='p1'> $row[1] </th></tr>
	<tr>
    <td id='p3'>Location : $row[3]</td></tr>
	<tr>
	
    <td id='p2'>";
	
 echo substr($row[2],0,150); echo"...</td></tr>
<tr>
    <td id='p2'>
<a href='fulljob.php?id=$row[0]' >More info</a>
</td>
</tr>
		
    ";         
    }
    echo'</table>'
	;
}
?>
<style>
​
   
.job{
		width:500px;
		height:60px;	
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
		width:550px;
	}
	#p3{
		color:red;
	}
.one{
	width:768px;
     margin:auto;
    position:absolute;
    top: 10%;
    left: 300px;	
}
.krk{
	height:33px;
}
.dy{
color: black; font-family: 'Lobster', cursive; font-size: 30px; font-weight: 300; line-height: 36px; margin: 0;
}
.tre{
	color: black; font-family: 'Raleway',sans-serif; font-size: 14px; font-weight: 500; line-height: 32px; margin: 0 0 24px;
}
</style>