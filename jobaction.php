<?php
   include('sessions.php');
  
    if(isset($_POST["insert"])){

	   $jobid      = mysqli_real_escape_string($connection,$_POST['jobid']);
	  $time      = mysqli_real_escape_string($connection,$_POST['time']);
        $description      = mysqli_real_escape_string($connection,$_POST['description']);

$sql= "insert into test (time,description,userid,jobid) 
         values('".$time."','".$description."','".$_SESSION['id']."','".$jobid."')";
    $result = mysqli_query($connection,$sql);
	if (!$result) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
    if($result){
		
		
        header("Location: profile2.php");
    }else
    {
        echo "test could not be added";
    }
 mysqli_close($connection);
}
?>
