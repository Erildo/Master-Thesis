<?php
	 
    $query="SELECT * FROM cv where userid='".$_SESSION['id']."'";
	$result_set=mysqli_query($connection,$query);
	if (!$result_set) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
    while($row=mysqli_fetch_array($result_set)){
        
		$experience=$row['experience'];
		$education=$row['education'];		
		$salary=$row['salary'];
		$country=$row['country'];
		

		}