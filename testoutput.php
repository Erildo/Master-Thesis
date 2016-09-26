<link href="jquery.numberedtextarea.css" rel="stylesheet" type="text/css">
<style>

textarea {background:black;
 color:white; 
padding:10px;}
.text{
	color: #424242;
 font-family: "Adobe Caslon Pro", "Hoefler Text", Georgia, Garamond, Times, serif;
	letter-spacing:0.1em;
	text-align:center;
	margin: 40px auto;
	text-transform: lowercase;
	font-size: 14pt;
	font-variant: small-caps;
	padding-left:0px;
}.container{
	padding-left:0px;
}
</style>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<div class="jquery-script-clear"></div>
<div class="container">



<textarea name="emri" cols="50" rows="30" class="form-control" >
<?php 
$mysqli = new mysqli("localhost","root","","mt");

if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}
$query = "SELECT script FROM test WHERE id = '2'";
$result = mysqli_query($mysqli, $query);
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
 echo $row['script']; 
	}
}
$mysqli->close();

?>
</textarea>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="jquery.numberedtextarea.js"></script>
<script>
$('textarea').numberedtextarea();
</script>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
