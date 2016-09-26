
<?php
    include('db.php');
    $query="SELECT * FROM test where id='".$_REQUEST["testid"]."'";
	$result_set=mysqli_query($connection,$query);
    if (!$result_set) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
    while($row=mysqli_fetch_array($result_set)){
	
	$time=$row['time'];
	$description=$row['description'];

	}
?>