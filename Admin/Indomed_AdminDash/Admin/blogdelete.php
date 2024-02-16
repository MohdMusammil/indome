<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['b_id'];


$query=mysqli_query($conn,"select * from blog where b_id='$x'");
$res=mysqli_fetch_assoc($query);
$id=$res['b_id'];	
$en=$res['bname'];
$burl=$res['burl'];

		
mysqli_query($conn,"delete from blog where b_id='$x'");

header( "refresh:3;url=createblog.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>