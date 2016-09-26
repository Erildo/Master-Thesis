<?php
    
    $query="SELECT jobs.id,jobs.name,jobs.description,jobs.country,test.jobid FROM jobs,test where jobs.id=test.jobid

	limit 6";
	$result_set=mysqli_query($connection,$query);
    
     $i=0;
    while($row=  mysqli_fetch_array($result_set)){
      
	  echo "
		<table>
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

<a href='counttest.php?id=$row[0]' >Take the Test</a>
	
</td>
</tr>
		
    ";         
    }
    echo'</table>
	
	
	'
	;
    
    mysqli_close($connection);
?>