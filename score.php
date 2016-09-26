<?php 
session_start();
include_once "menuafter2.php";
include_once "db.php";

$query="SELECT * FROM testsub where userid='".$_REQUEST["id"]."' AND score > 0";
$result_set=mysqli_query($connection,$query);
$row=mysqli_num_rows($result_set);	
if($row > 0) {
echo '<script>
      alert("You cant submit score Twice!");
       var timer = setTimeout(function() {
            window.location="profile2.php"
        });
	  </script>';
}
?>
<div style=" margin-top:70px;">
<?php 
include 'textarea2.php';
include_once 'jobecho3.php'; 
?>
<div style="width:500px; margin-top:50px; float:right; padding-left:0px;">
<textarea cols="60" rows="20" readonly><?php echo $description;?></textarea>
</div>
</div>
<style>
body{
    background: milky;
  font-family: sans-serif;
  font-weight: 100;
}
</style>
