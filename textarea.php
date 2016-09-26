<link href="jquery.numberedtextarea.css" rel="stylesheet" type="text/css">

<style>
textarea {background:black; color:white; padding:10px;}
</style>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

</head>
<div class="container" style="max-width:340px; margin-left:100px; float:left;">

<form action="" method="POST" style="width:300px;">
<textarea name="emri" cols="50" rows="30" class="form-control"  >
<html>
<body>
 <p>Header...</p>
<script>
alert('Hello, World!')
</script>
<p>...Footer</p>
</body>
</html> 


















</textarea>

  <tr><td colspan="2"> 
  <input type="submit" 
  style="
    background-color: #4CAF50;
    border: none;
	float:left;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin-left:380px; 
	margin-top:10px;

	" value="Submit" id="add" name="add" />
	</td>
	</tr>
</form>

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
<?php
    if(isset($_POST["add"]))
	{       $id=$_REQUEST["id"];
        $script=$_POST["emri"];
       

    $conn = mysqli_connect("localhost","root","") or die("Could not establish connection");

    mysqli_select_db($conn,"mt") or die("Database not found");

    $query="INSERT INTO testsub(userid,script,jobid) VALUES ('".$_SESSION['id']."','".$script."','".$_REQUEST["id"]."');";
    $result = mysqli_query($conn,$query);
    if($result){
header('Location:testover.php');
    }else
    {
        echo "User could not be added";
    }
 mysqli_close($conn);
}
?>
