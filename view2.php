

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>


<div id="body">
	<table class="pure-table pure-table-bordered" width="40%">
    <thead>
	
	 

    
    <tr>
    <th>File Name</th>
    <th>File Type</th>
    <th>File Size(KB)</th>
    <th>View</th>

    </tr>    </thead>

    <?php
	$sql="SELECT * FROM tbl_uploads where userid='".$_REQUEST["id"]."'";
	$result_set=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>