<?php
    include('db.php');
    $query="SELECT id FROM jobs where id='".$_REQUEST["jobid"]."'";
	$result_set=mysqli_query($connection,$query);
    if (!$result_set) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
    while($row=mysqli_fetch_array($result_set)){
	
	$jobid=$row['id'];
	}
?>