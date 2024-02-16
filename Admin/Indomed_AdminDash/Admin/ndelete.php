<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['n_id'];


$query=mysqli_query($conn,"select * from news where n_id='$x'");
$res=mysqli_fetch_assoc($query);
$id=$res['n_id'];	
$img=$res['pic'];	
$nn=$res['nname'];
$ndesc=$res['ndesc'];

		

//delete image
unlink("image/$nn/$img");

//delete users directory
rmdir("image/$nn");
		
mysqli_query($conn,"delete from news where n_id='$x'");

header( "refresh:3;url=news.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>