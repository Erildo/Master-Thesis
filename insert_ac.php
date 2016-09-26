<?php
$connection = mysqli_connect("localhost", "root", ""); 
$db = mysqli_select_db( $connection,"mt"); 
if(isset($_POST['submit'])){ 
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
if($name !=''||$email !=''){
$query = mysqli_query($connection,"insert into users(id, name, email) values ('$name','$name', '$email')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection);
?>