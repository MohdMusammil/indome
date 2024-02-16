<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['g_id'];


$query=mysqli_query($conn,"select * from gal where g_id='$x'");
$res=mysqli_fetch_assoc($query);
$id=$res['g_id'];	
$img=$res['pic'];	
$gn=$res['gname'];

		

//delete image
unlink("image/$gn/$img");

//delete users directory
rmdir("image/$gn");
		
mysqli_query($conn,"delete from gal where g_id='$x'");

header( "refresh:3;url=resources.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>