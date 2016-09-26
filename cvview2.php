<?php
	 include_once('db.php');
    $query="SELECT * FROM cv where userid='".$_REQUEST["id"]."'";
	$result_set=mysqli_query($connection,$query);
	if (!$result_set) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
    while($row=mysqli_fetch_array($result_set)){
        
		$experience=$row['experience'];
		$education=$row['education'];		

		}