<?php
  $query="SELECT * FROM skills where userid='".$_REQUEST["id"]."'";
	$result_set=mysqli_query($connection,$query);
	if (!$result_set) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
while($row=mysqli_fetch_array($result_set)){
	$id=$row['id'];   
   echo "
		
		
		<div class='skillbar clearfix' data-percent='$row[3]'>
	<div class='skillbar-title' style='background: ";
if($id%2==0){
	
echo   "#800080";
}
else
	{
	
echo   "#1A67B9;";

}
echo"
	'><span>$row[2]</span></div>
	<div class='skillbar-bar' style='background: ";
	if($id%2==0){
	
echo"	#008080;";
}
else
	{
	
echo"#4393E7;";

}

echo"'></div>
	<div class='skill-bar-percent'>$row[3]</div>
</div>
		
    ";         
    }