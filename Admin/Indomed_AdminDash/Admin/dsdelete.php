<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['d_id'];


$query=mysqli_query($conn,"select * from ds where d_id='$x'");
$res=mysqli_fetch_assoc($query);
$id=$res['d_id'];	
$en=$res['dname'];
$burl=$res['durl'];

		
mysqli_query($conn,"delete from ds where d_id='$x'");

header( "refresh:3;url=createds.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>