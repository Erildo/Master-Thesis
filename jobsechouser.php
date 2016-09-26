	
<?php
    
	$query="
SELECT jobs.id,jobs.name,jobs.country,jobs.description,test.id,test.jobid FROM jobs left join test on jobs.id = test.jobid
     Where jobs.userid='".$_SESSION['id']."'
 GROUP BY jobs.id
";	
	
	$result_set=mysqli_query($connection,$query);

    while($row=mysqli_fetch_array($result_set)){
		 $jobid=$row[0];
	   $jobname=$row[1];     
	   $jobdescription=$row[3];
       $jobcountry=$row[2];
       $testid=$row[4];
		echo"
	<table>
<tr>
    <th> $jobname </th></tr>
	<tr>
    <td>Location :$jobcountry </td>
</tr> 
	<tr>
	
    <td>";
	
 echo substr($jobdescription,0,150); echo"...</td></tr>
<tr>
<td><a href='fulljob.php?id=$jobid' >info</a>";
if (empty($testid)) {
	echo"
	<a href='http:/su/testinsert.php?jobid=$jobid'>+ create test</a>";
}
else
	echo"
 <a href='http:/su/score2.php?testid=$testid'>view test</a>

</td>
</tr>
		
    ";         
    }
    echo'</table>';