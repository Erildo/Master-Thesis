<?php 
session_start();
include_once('db.php');
include_once('menuafter.php');
 $query="SELECT userid FROM cv where userid='".$_SESSION['id']."'";
	$result=mysqli_query($connection,$query);
 $row=mysqli_num_rows($result);
  
		if($row > 0) {
header("Location:skillinsert.php");
}?>


<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<style>
div{
margin-left:150px; 
margin-top:70px;
</style>

<body>   


 <form class="pure-form pure-form-stacked" action="cvaction.php" method="POST">
      <fieldset>
  <div  class="pure-control-group">
    
	<div class="checkbox" style="margin-top:10px;margin-left:10px;">  
<strong>What's your experience level?</strong></br></br>
        <input  type="checkbox" name="check" class="single-checkbox" value="student">          Student  </input>
        <input  type="checkbox" name="check" class="single-checkbox" value="1 year">          1 year </input></br></br>
		<input type="checkbox" name="check" class="single-checkbox" value="2 year">          2 year</input>
<input  type="checkbox" name="check" class="single-checkbox" value="3 year">          3 year</input></br></br>
<input id="check4" type="checkbox" name="check" class="single-checkbox" value="4 year">  4 year  </input>
		</div></br>
    <textarea class="pure-input-1-2" id="education" name="education" placeholder="Education"></textarea>


<div style=" margin-top:10px;margin-left:0px;">
<p class="dy">What region do you want to work in?</p></br>
<select id="region" name="region" class="form-control">
<option value="Albania">Albania</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Canada">Canada</option>
<option value="USA">USA</option>

<option value="Mexico">Mexico</option>
<option value="Denmark">Denmark</option>
<option value="Netherlands">Netherlands</option>

<option value="China">China</option>
<option value="Japan">Japan</option>
<option value="Singapore">Singapore</option>
<option value="Russia">Russia</option>
</select>
<p class="dy">What are your salary excpectations?</p>
	<p><input id="salary" name="salary" type="number" placeholder="Salary"></p>

</div>

 <input class="pure-button pure-button-primary" name="insert" type="submit" id="insert" value="insert" />

	<fieldset>
  </form>
  <script>
var limit = 1;
$('input.single-checkbox').on('click', function (evt) {
    if ($('.single-checkbox:checked').length > limit) {
        this.checked = false;
    }
});
</script>
  </div>
</div>
</body>