<?php 
include('db.php');

if(!isset($_REQUEST['id']))
{
exit('cilin perdorues doni te fshini?');
}
$code=$_REQUEST['id'];
$code=$code+0;
if($code==0)
{
exit('kodi i pasakte');
}

$q="select * from users where id=".$code;

$res=mysqli_query($connection,$q) or die(mysqli_error($connection));

$n=mysqli_num_rows($res);

if($n==0) exit('nuk ka perdorues me kete kod');

$rresht=mysqli_fetch_array($res);
$id=$rresht['id'];
$name=$rresht['name'];
        $description=$rresht["description"];
         $telephone=$rresht["telephone"];
$email=$rresht['email'];

?>
<html>
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php 
if($_SESSION["type"]=="user"){
include_once('menuafter.php');}
			else
			{
include_once('menuafter2.php');}

?>
<form name="form1" method="post" class="pure-form" style="margin-left:200px;margin-top:70px;" action="editusersql2.php">
        To see your changes you must login again!
<fieldset class="pure-group">

    <input type="text" class="pure-input-1-2" name="id" readonly value="<?php echo $id; ?>">
    <input type="text" class="pure-input-1-2" name="name" value="<?php echo $name; ?>"    >
    <input type="text" class="pure-input-1-2" name="telephone" value="<?php echo $telephone; ?>" >
    <input type="text" class="pure-input-1-2" name="email" value="<?php echo $email; ?>">
  
    <textarea name="description" class="pure-input-1-2" cols="70" rows="10"><?php echo $description; ?></textarea>
 
 </fieldset>
  <input name="Ruaj" class="pure-button pure-input-1-2 pure-button-primary" type="submit" value="SAVE">

</form>
</body>
</html>