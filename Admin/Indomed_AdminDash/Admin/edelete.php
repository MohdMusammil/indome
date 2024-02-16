<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['e_id'];


$query=mysqli_query($conn,"select * from events where e_id='$x'");
$res=mysqli_fetch_assoc($query);
$id=$res['e_id'];	
$img=$res['pic'];	
$en=$res['ename'];
$desc=$res['desc'];

		

//delete image
unlink("image/$en/$img");

//delete users directory
rmdir("image/$en");
		
mysqli_query($conn,"delete from events where e_id='$x'");

header( "refresh:3;url=event.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>