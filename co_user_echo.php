<?php
include_once('db.php');
    $query="SELECT * FROM users where id='".$_REQUEST["id"]."'";
	$result_set=mysqli_query($connection,$query);
	if (!$result_set) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
while($row=mysqli_fetch_array($result_set)){
$userid=$row['id'];
$name=$row['name'];
$country=$row['country'];
$description=$row['description'];
$telephone=$row['telephone'];
$email=$row['email'];
}