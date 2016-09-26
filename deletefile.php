<?php
include_once 'db.php';
if (isset($_GET['id']) && is_numeric($_GET['id']))

{
     $id = $_GET['id'];

    $query="DELETE FROM tbl_uploads WHERE id=$id";
    
    $result = mysqli_query($connection,$query);
    if($result){
        header("Location: profile.php");
    }
	

else

{

header("Location: view.php");

}


}
	
?>