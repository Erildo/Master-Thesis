<?php include_once('menuafter2.php');?>
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<style>
div{
margin-left:150px; 
margin-top:70px;
}
body{
    background-image: url("skill.png");
	    background-repeat: no-repeat;
}
</style>

<body>   


 <form class="pure-form pure-form-stacked" action="jobinsert2.php" method="POST">
      <fieldset>
  <div  class="pure-control-group">
    
<input id="name" name="name" type="text" placeholder="Position">

<select id="country" name="country" >
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
     <input id="university" name="university" type="checkbox" value="yes">University</label>

	<input id="salary" name="salary" type="text" placeholder="Salary">

    <textarea class="pure-input-1-2" id="description" name="description" placeholder="Description"></textarea>
 <input class="pure-button pure-button-primary" name="insert" type="submit" id="insert" value="insert" />
	<fieldset>
  </form>
  </div>
</div>
</body>