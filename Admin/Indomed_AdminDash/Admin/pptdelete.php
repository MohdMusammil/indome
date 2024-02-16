<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['p_id'];


$query=mysqli_query($conn,"select * from ppt where p_id='$x'");
$res=mysqli_fetch_assoc($query);
$id=$res['p_id'];	
$en=$res['pname'];
$burl=$res['purl'];

		
mysqli_query($conn,"delete from ppt where p_id='$x'");

header( "refresh:3;url=createppt.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>