<?php
    
	$query="
	SELECT testsub.id,testsub.userid,testsub.jobid,testsub.score,test.jobid,test.userid,users.id,users.email,users.name
FROM test,testsub,users
where testsub.jobid=test.jobid
AND test.userid=users.id
AND testsub.score > 8
AND testsub.userid='".$_SESSION['id']."'
	
	

";


$result_set=mysqli_query($connection,$query);


    while($row=mysqli_fetch_array($result_set)){
		 $testsubid=$row[0];
	   $testsubuserid=$row[1];     
	   $jobid=$row[2];
       $score=$row[3];
       $company=$row[5];
	   $email=$row[7];
	   $name=$row[8];
	   if (empty($experience)){
		   echo"";
	   }
	   else echo"
	    <div class='wrapper4'>";

 echo"<img class='kater' src =winner.png alt='image'/>";
		?>
		  <article>
<?php
	   echo"<p style='font-size:16;'>Well Done!</p>
	   One of your tests has a score more than 8.
	   Please contact your Employee:";
	   echo $name;
       echo" for the next phase:  ";
	   echo $email;
	}
	?>
	
 </article>
</div>
	