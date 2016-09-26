<?php
   include('sessions.php');
?>
<?php
    if(isset($_POST["insert"])){
         $check      = mysqli_real_escape_string($connection,$_POST['check']);
        $education      = mysqli_real_escape_string($connection,$_POST['education']);
         $region      = mysqli_real_escape_string($connection,$_POST['region']);
         $salary      = mysqli_real_escape_string($connection,$_POST['salary']);

$sql= "insert into cv (userid,experience,education,country,salary) 
         values('".$_SESSION['id']."','".$check."','".$education."','".$region."','".$salary."')";
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
