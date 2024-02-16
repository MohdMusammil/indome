<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['v_id'];


$query=mysqli_query($conn,"select * from videos where v_id='$x'");
$res=mysqli_fetch_assoc($query);
$id=$res['v_id'];	
$vn=$res['vname'];
$vurl=$res['vurl'];

		

//delete image
// unlink("image/$en/$img");

//delete users directory
// rmdir("image/$en");
		
mysqli_query($conn,"delete from videos where v_id='$x'");

header( "refresh:3;url=videos.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>