<link rel="stylesheet" href="tablecss/style.css">
<body>
<table class="table-fill">
<thead>
<tr>
 <th  class="text-left" >ID</th>
    <th  class="text-left">Name</th>
    <th  class="text-left">Mastery(%)</th>
    <th  class="text-left">Delete</th>

</tr>
</thead>
<tbody class="table-hover">
 <?php
	$sql="SELECT * FROM skills where userid='".$_SESSION['id']."'";
	$result_set=mysqli_query($connection,$sql);
	while($row=mysqli_fetch_array($result_set))
	{		?>

        <tr>
        <td class="text-left"><?php echo $row['id'] ?></td>
        <td class="text-left"><?php echo $row['name'] ?></td>
        <td class="text-left"><?php echo $row['skillmastery'] ?></td>
		<td class="text-left"><a href='deleteskill.php?id=<?php echo $row['id'] ?> '>Delete</a></td>
        </tr>
        <?php
	}
	
	?>

</tbody>
</table>
  

  </body>
  </html>
