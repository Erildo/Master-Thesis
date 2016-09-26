<?php include('usertype.php');  
include_once "menuafter.php";
?>
<div style=" margin-top:70px;">
<?php include 'textarea.php';
 include_once 'testecho.php'; ?>

<div style=" width:30px;  float:right;">
<form name="counter" style="margin-right:350px; float:right;">
<input name="d2" type="text" size="8" readonly="readonly" >
</form></div>

<div style="width:500px; margin-top:100px; float:right; padding-left:0px;">
<textarea cols="60" rows="20" readonly><?php echo $description;?></textarea>
</div>
</div>
<script>
var minutes=" <?php echo $time ?> ";
var seconds=00

function display(){
	
if (seconds<=0&minutes >0){
minutes-=1
seconds+=59
}
if (minutes<=-1){
minutes==1
seconds=0

}	
if(minute=0 || seconds>0)
{
	seconds -=1
}
else window.location="testover.php";

document.counter.d2.value="TIME="+minutes+":"+seconds

	setTimeout("display()",1000)
}

display()
	</script>
<style>
input {
    border: 10px solid black; 
    -webkit-box-shadow: 
      inset 0 0 10px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 18px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 25px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}
body{
    background: milky;
  font-family: sans-serif;
  font-weight: 100;
}


</style>