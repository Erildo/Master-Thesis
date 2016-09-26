<?php
    
	$query="SELECT jobs.id,jobs.name,jobs.country,jobs.description,users.name,users.id,testsub.score
FROM jobs,testsub,users 
WHERE  jobs.userid='".$_SESSION['id']."'
AND jobs.id = testsub.jobid 
AND   testsub.userid=users.id";	
	
	$result_set=mysqli_query($connection,$query);
    echo "</br><p class='gen'>Users who have taken tests: ";
    while($row=mysqli_fetch_array($result_set)){
       $jobid=$row[0];
	   $jobname=$row[1];
        $jobcountry=$row[2];
         $jobdescription=$row[3];
        $username=$row[4];
$userid=$row[5];		
	$score=$row[6];

	echo "
</br></p><a href='co_view_profile.php?id=$userid&jobid=$jobid'>$username </a>for $jobname Score $score</br>
"; }

?>