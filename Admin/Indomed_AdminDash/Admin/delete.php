<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['Proj_id'];


$query=mysqli_query($conn,"select * from projects where user_id='$x'");
$res=mysqli_fetch_assoc($query);
$img=$res['pic'];
$email=$res['email'];
$n=$res['name'];

		

//delete image
unlink("image/$n/$img");

//delete users directory
rmdir("image/$n");
		
mysqli_query($conn,"delete from projects where user_id='$x'");

header( "refresh:3;url=projects.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>