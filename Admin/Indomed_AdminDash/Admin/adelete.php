<?php 
include_once'../../DB/db_connect.php';
$conn = OpenCon();

$x=$_REQUEST['a_id'];


$query=mysqli_query($conn,"select * from article where a_id='$x'");
$res=mysqli_fetch_assoc($query);
$id=$res['a_id'];	
$an=$res['aname'];
$aurl=$res['aurl'];

		
mysqli_query($conn,"delete from article where a_id='$x'");

header( "refresh:3;url=article.php" ); 
echo 'Records deleted successfully <br>You\'ll be redirected in about 3 secs.'; 


?>