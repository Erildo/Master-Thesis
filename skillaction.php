<?php
   include('sessions.php');

    if(isset($_POST["insert"]))
	{
         $name  = mysqli_real_escape_string($connection,$_POST['name']);
        $skillmastery = mysqli_real_escape_string($connection,$_POST['skillmastery']);
	   
$sql= "insert into skills (userid,name,skillmastery) 
         values('".$_SESSION['id']."','".$name."','".$skillmastery."')";
    $result = mysqli_query($connection,$sql);
	
	if (!$result) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
    if($result){
		
		
        header("Location: skillinsert.php");
    }else
    {
        echo "User could not be added";
    }
 mysqli_close($connection);
}
?>
