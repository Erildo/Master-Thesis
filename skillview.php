<head>

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<style>
.theta{
background-color:green;
color:white;	
}
</style>
</br>
</br>
</br>
	<table class="pure-table pure-table-bordered" width="40%">
    <thead>
    <tr>
    <th class="theta" >ID</th>
    <th class="theta">Name</th>
    <th class="theta">Mastery(%)</th>
    <th class="theta">Delete</th>

    </tr>    </thead>

    <?php
	$sql="SELECT * FROM skills where userid='".$_SESSION['id']."'";
	$result_set=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result_set))
	{		?>

        <tr>
        <td ><?php echo $row['id'] ?></td>
        <td ><?php echo $row['name'] ?></td>
        <td ><?php echo $row['skillmastery'] ?></td>
		<td ><a href='deleteskill.php?id=<?php echo $row['id'] ?> '>Delete</a></td>
        </tr>
        <?php
	}
	
	?>
    </table>
    
</div>
