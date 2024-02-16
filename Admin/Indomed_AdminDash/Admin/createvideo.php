<?php
session_start();
ob_start();
include_once'../../DB/db_connect.php';
$conn = OpenCon();
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysqli_query($conn, "SELECT * FROM master_adminuser WHERE id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);

extract($_REQUEST);
if(isset($save))
{
	$query="select * from videos where vname='$vn' ";
	$sql=mysqli_query($conn,$query);
	
	//select record
	$row=mysqli_num_rows($sql);	
	if($row==1)
	{
		echo "<h3 style='color:red;margin-left:100px'>This email alredy exists</h3>";
	}
	else
	{
			
		
	//encrypt
	//$pass=md5($pass);
	
	//image
	// $image=$_FILES['pic']['name'];
	
	
	//qualification
	//$qua=implode(",",$chk);
	
	// INSERT INTO `videos`(`v_id`, `vname`, `vurl`, `regDate`)
   $query="insert into videos values('', '$vn', '$vurl', now())";	
	//upload image
	// mkdir("image/$n");
	// move_uploaded_file($_FILES['pic']['tmp_name'],"image/$n/".$_FILES['pic']['name']);
	
	
	if(mysqli_query($conn,$query))
	{
	echo "<h3 style='color:blue;margin-left:100px'>Records Saved Successfully <br></h3>";	
	}
	else
	{
		echo "Some error while executing query";
		
	}
	
		

	}
	
}




?>
 <html>
<head>
<title>Indomed Educare</title>

</head> 
<body>
<?php include"includes/header.php"; ?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
       <?php include"includes/topbar.php"; ?>

						<div class="outter-wp">



                                        <div class="set-1">
                                                <div class="graph-2 general">
                                                    <h3 class="inner-tittle two">Create Video</h3>
                                                        <div class="grid-1">
                                                                <div class="form-body">
                                                                <form class="form-horizontal" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="form-group col-sm-4 control-label">Video Title</tD>
					<td><input type="text" class="form-control1" name="vn"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Video URL [Youtube video url]</tD>
					<td><input type="text" class="form-control1" name="vurl"/></td>
				</tR>
				<tr>               
			<td align="center" colspan="2">
				<input type="submit" name="save" value="Save Data"/>
				</td>
				</tR>
			</table>
		</form>

                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
										<div class="clearfix"></div>		
										
									<!--//bottom-grids-->
									

										<!--//outer-wp-->
									</div>
                                    <?php include"includes/footer.php"; ?>

								</div>
							</div>
				<!--//content-inner-->

		 <?php include"includes/menu.php"; ?>

							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>

<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>