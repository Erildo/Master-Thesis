
<link rel="stylesheet" href="tablecss/style.css">
<body>
<table class="table-fill">
<thead>
<tr>
 <th  class="text-left" >Name</th>
    <th  class="text-left">Type</th>
    <th  class="text-left">Size(kb)</th>
    <th  class="text-left">View</th>
    <th  class="text-left">Delete</th>

</tr>
</thead>
<tbody class="table-hover">
  <?php
	$sql="SELECT * FROM tbl_uploads where userid='".$_SESSION['id']."'";
	$result_set=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result_set))
	{		?>

       <tr>
        <td class="text-left"><?php echo $row['file'] ?></td>
        <td class="text-left"><?php echo $row['type'] ?></td>
        <td class="text-left"><?php echo $row['size'] ?></td>
        <td class="text-left"><a href="uploads/<?php echo $row['file'] ?>" target="_blank">View</a></td>
		<td class="text-left"><a href='deletefile.php?id=<?php echo $row['id'] ?> '>Delete</a></td>
        </tr>
        <?php
	}
	
	?>

</tbody>
</table>
  

  </body>
  </html>
