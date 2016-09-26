<?php 
include('db.php');


$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$description=$_REQUEST['description'];
$telephone=$_REQUEST['telephone'];


$q=" 
 update users 
 set 
 name='".$name."',
 email='".$email."',
  description='".$description."',
    telephone='".$telephone."'


 where id=".$id;
 
mysqli_query($connection,$q) or die('gabim ne shtim');

?>
<script language="JavaScript">

window.location='profile.php';
</script>