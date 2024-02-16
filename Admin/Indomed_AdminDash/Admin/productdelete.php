<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['p_id'];


$query=mysqli_query($conn,"select * from product where p_id='$x'");
$res=mysqli_fetch_assoc($query);
$id=$res['p_id'];	
$img=$res['pic'];	
$pn=$res['pname'];
$pdesc=$res['pdesc'];

		

//delete image
unlink("image/$pn/$img");

//delete users directory
rmdir("image/$pn");
		
mysqli_query($conn,"delete from product where p_id='$x'");

header( "refresh:3;url=createproduct.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>