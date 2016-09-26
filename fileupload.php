<?php
session_start();
include_once 'db.php';
 include_once "menuafter.php";
 include_once "filecheck.php";

 ?>

<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div id="body">
<h3>Make sure your profile photo to be named "profile"</h3></br>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="fileupload.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>
<div id="footer">
</div>
<br>
<br>
<br><?php
if($row > 0) {
include_once ('view.php'); }?>

</body>
</html>