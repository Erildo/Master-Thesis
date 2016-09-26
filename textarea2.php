<?php  include_once 'testecho2.php';?>
<?php include 'lastaction.php';?>

<link href="jquery.numberedtextarea.css" rel="stylesheet" type="text/css">

<style>
textarea {background:black; color:white; padding:10px;}
</style>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

</head>
<div class="container" style="max-width:340px; margin-left:100px; float:left;">

<form  style="width:300px;">
<textarea name="emri" cols="50" rows="30" class="form-control"><?php echo $script;?> </textarea>

  


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
