<?php
    include('db.php');
    $query="SELECT * FROM testsub where userid='".$_REQUEST["id"]."'and jobid='".$_REQUEST["jobid"]."'";
	$result_set=mysqli_query($connection,$query);
    if (!$result_set) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
    while($row=mysqli_fetch_array($result_set)){
	
	$script=$row['script'];
	$jobid=$row['jobid'];
	$userid=$row['userid'];

	}
?>