	<?php
include_once "menuafter2.php";
$search_output = "";
if(isset($_POST['searchquery']) && $_POST['searchquery'] != ""){
	$searchquery = preg_replace('#[^a-z 0-9?!]#i', '', $_POST['searchquery']);
if($_POST['filter1'] == "emp"){
		$sqlCommand = "SELECT id,name,description,country FROM users WHERE   name LIKE '%$searchquery%' OR description LIKE '%$searchquery%'";
	}
        include_once("db.php");
        $query = mysqli_query($connection,$sqlCommand) or die(mysqli_error($connection));
	$count = mysqli_num_rows($query);
	if($count > 0){
		$search_output .= "<hr/>$count results for <strong>$searchquery</strong></br>";
		while($row = mysqli_fetch_array($query)){
	       $id = $row["id"];
		    $name = $row["name"];
			$description= $row["description"];
			$country= $row["country"];
             
		    $search_output .= "
			<div class='job'>
<table>
<tr>
    <th id='p1'>$name</th></tr>
	<tr>
    <td id='p3'>Location :$country</td></tr>
	<tr>
    <td id='p2'> ".substr($description,0,150)."... </td></tr>
<tr>
    <td id='p2'>
	   <a href='co_view_profile.php?id=$id'>More info</a>

</td></tr>
</table>";
                } 
	} else {
		$search_output = "<hr/>0 results for <strong>$searchquery</strong><hr/>";
	}
}
?>
<html>
<head>   <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  </head>
<style>
.job{
		width:500px;
		height:60px;	
        line-height:0.9;
}
	#p1{
	font-family: Arial,sans-serif;
    color:blue;
	font-size:16px;
    font-weight:bold;
	}
	#p2{
		color:black;
	}
	#p3{
		color:gray;
	}
.one{
	width:768px;
     margin:auto;
    position:absolute;
    top: 10%;
    left: 300px;	
}
.krk{
	height:33px;
}
.dy{
color: black; font-family: 'Lobster', cursive; font-size: 30px; font-weight: 300; line-height: 36px; margin: 0;
}
.tre{
	color: black; font-family: 'Raleway',sans-serif; font-size: 14px; font-weight: 500; line-height: 32px; margin: 0 0 24px;
}
body {
   background-image:url("jobsearch.jpg");
    background-repeat: no-repeat;
}
</style>
<body>

<div class="one">
<h2 class="dy">Hire your next!</h2></br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input name="searchquery" class="krk"  type="text" size="50" maxlength="88">
<input name="myBtn" class="pure-button pure-button-primary" type="submit">
  <br><br>
  Search In:
  <select name="filter1">
    <option value="emp">Users</option>
  </select>
</form>

<div class="tre">
<?php echo $search_output; ?>
</div>
</div>
</body>
</html>