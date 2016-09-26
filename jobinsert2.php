<?php
   include('sessions.php');
?>
<?php
    if(isset($_POST["insert"])){
         $name= mysqli_real_escape_string($connection,$_POST['name']);
        $description= mysqli_real_escape_string($connection,$_POST['description']);
          $country=mysqli_real_escape_string($connection,$_POST['country']);
		            $salary=mysqli_real_escape_string($connection,$_POST['salary']);
					          $university= mysqli_real_escape_string($connection,$_POST['university']);


$sql= "insert into jobs (name,description,country,userid,salary,university) 
         values('".$name."','".$description."','".$country."','".$_SESSION['id']."','".$salary."','".$university."')";
    $result = mysqli_query($connection,$sql);
	if (!$result) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
    if($result){
		
		
        header("Location: profile2.php");
    }else
    {
        echo "User could not be added";
    }
 mysqli_close($connection);
}
?>