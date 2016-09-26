
<form action="" method="POST">
<input type="text" id="score" name="score" placeholder="Submit Your Score" style="width:200px;height:40px; margin-left:10px; margin-bottom:20px; "></input>
<tr><td colspan="2"> 

<input type="submit" style="
    background-color: #4CAF50;
    border: none;
	float:left;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin-left:500px; 
	margin-top:10px;" value="Submit" id="add" name="add" /></td></tr>
</form>
<?php
    if(isset($_POST["add"])){
        $score=$_POST["score"];
    $conn = mysqli_connect("localhost","root","") or die("Could not establish connection");

    mysqli_select_db($conn,"mt") or die("Database not found");

    $query="UPDATE testsub
	SET score='".$score."' 
	WHERE userid='".$_REQUEST['id']."' and jobid='".$REQUEST['jobid']."'";
    $result = mysqli_query($conn,$query);
		if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
    if($result){
header('Location:profile2.php');
    }else
    {
        echo "User could not be added";
    }
 mysqli_close($conn);
}
?>
