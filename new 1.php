<!-------HTML------>

<form id="f1" name="f1"  action="insert_ac.php" method="post">
<label>Id:</label>
<input class="input" name="id" type="text" value="">
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>Email:</label>
<input class="input" name="email" type="text" value="">

 <input type=submit id=btn_submit name=btn_submit />
</form>


<?php


$timestamp = time();

$diff = 12; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.


//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
 $slice = ($timestamp - $_SESSION['ts']); 
 $diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
 $diff = $hld_diff;
 $_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;


?>



<div id="strclock">Clock Here!</div>


<!------- JAVA SCRIPT--------->


<script type="text/javascript">
 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>


//SCRIPT FOR AUTO SUMBITE
function doSubmit() {
//btn_submit is the name of the SUBMIT button in the form
document.f1.btn_submit.click();
}



function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1;
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }

 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }

 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;

 document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
 setTimeout("countdown()",1000);


 //AUTO SUBMIT
if(sec == 00){
  document.f1.btn_submit.click();
 }

 }

 countdown();

  
 </script>