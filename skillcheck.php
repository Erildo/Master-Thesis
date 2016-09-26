<?php $query="SELECT userid FROM skills where userid='".$_SESSION['id']."'";
	$result=mysqli_query($connection,$query);
 $row=mysqli_num_rows($result);
  
		if($row > 3) {
header("Location:fileupload.php");

}?>