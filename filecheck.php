<?php
  $query="SELECT * FROM tbl_uploads where userid='".$_SESSION['id']."'";
	$result=mysqli_query($connection,$query);
 $row=mysqli_num_rows($result);	
	if($row > 0) {
 echo '<script>
             alert("Well done now head over to profile!");
          </script>';
}
 ?>