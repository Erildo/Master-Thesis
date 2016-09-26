<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" href="profilecss/reset.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="profilecss/style.css" media="screen" type="text/css" />
</head>
<style>
.button-success {
            background: black;
			color:white;
        }
</style>
 <div class="wrapper">
  <?php $sql="SELECT * FROM tbl_uploads where userid='".$_SESSION['id']."' and file='profile.jpg' ";
	$result_set=mysqli_query($connection,$sql);
	$found_row = false;

	while($row=mysqli_fetch_array($result_set)){

			 
     $found_row = true;
     echo"<img class='tre' src =uploads/$url alt='image'/>";
   }
      if ($found_row == false) {
     echo"<img class='tre'src =uploads/insta.png alt='image'/>";
}
	?>
  <article>
<p style=" font-size:14px; font-weight: bold; color: black;"> <?php echo  $_SESSION['name']; ?></p>
</br>
<p><i class="fa fa-phone" aria-hidden="true"></i>
      <?php  echo $_SESSION['telephone']; ?></p>
<p><i class="fa fa-flag" aria-hidden="true"></i>
   <?php  echo $_SESSION['country']; ?></p>
Experience: <?php 
if (empty($experience)) {
    echo 'Experience is not set at all';
} 
 else
 echo $experience ?>
 </br>Education :
 <?php 
if (empty($education)) {
    echo 'Education is not set at all';
} 
 else
 echo $education ?>
 </br>
 </br>
 <a class="button-success pure-button" href="http://localhost/su/cvinsert.php">Experience</a>
 <a class="pure-button pure-button-primary" href="edituser2.php?id=<?php  echo $_SESSION['id']; ?>">Edit your data</a>
 </article>
 <p class="email"><i class="fa fa-envelope" aria-hidden="true"></i>
<?php  echo $_SESSION['email']; ?></p>
</div>
