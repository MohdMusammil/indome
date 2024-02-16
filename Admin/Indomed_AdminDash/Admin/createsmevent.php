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
if(isset($fsave))
{
	$query="select * from sevents where fbeventurl='$fbeurl' ";
	$sql=mysqli_query($conn,$query);
	
	//select record
	$row=mysqli_num_rows($sql);	
	if($row==1)
	{
		echo "<h3 style='color:red;margin-left:100px'>This email alredy exists</h3>";
	}
	else
	{
			

   $query="insert into sevents values('', '$fbeurl')";	

	
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

if(isset($gmsave))
{
	$query="select * from gmevent where gmeventurl='$gmeurl' ";
	$sql=mysqli_query($conn,$query);
	
	//select record
	$row=mysqli_num_rows($sql);	
	if($row==1)
	{
		echo "<h3 style='color:red;margin-left:100px'>This email alredy exists</h3>";
	}
	else
	{
			

   $query="insert into gmevent values('', '$gmeurl')";	

	
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

if(isset($ysave))
{
	$query="select * from youtubeevent where youtube_url='$yteurl' ";
	$sql=mysqli_query($conn,$query);
	
	//select record
	$row=mysqli_num_rows($sql);	
	if($row==1)
	{
		echo "<h3 style='color:red;margin-left:100px'>This email alredy exists</h3>";
	}
	else
	{
			

   $query="insert into youtubeevent values('', '$yteurl')";	

	
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
                                                    <h3 class="inner-tittle two">Facebook Live Event URl</h3>
                                                        <div class="grid-1">
                                                                <div class="form-body">
                                                                <form class="form-horizontal" method="post" enctype="multipart/form-data">

  <div class="form-group">

    <div class="col-sm-12">
      <input
        type="text"
        class="form-control1"
        id="focusedinput"
        name="fbeurl"
        placeholder=" "
      />
      <button type="submit" name="fsave" class="btn btn-default">
        Create
      </button>
    </div>
  </div>
</form>

                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="set-1">
                                                <div class="graph-2 general">
                                                    <h3 class="inner-tittle two">Youtube Live Event URl</h3>
                                                        <div class="grid-1">
                                                                <div class="form-body">
                                                                <form class="form-horizontal" method="post" enctype="multipart/form-data">

  <div class="form-group">

    <div class="col-sm-12">
      <input type="text" class="form-control1" id="focusedinput" name="yteurl" placeholder=" ">
      <button type="submit" name="ysave" class="btn btn-default">
        Create
      </button>
    </div>
  </div>
</form>

                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="set-1">
                                                <div class="graph-2 general">
                                                    <h3 class="inner-tittle two">Zoom Meet Event URl</h3>
                                                        <div class="grid-1">
                                                                <div class="form-body">
                                                                <form class="form-horizontal" method="post" enctype="multipart/form-data">

  <div class="form-group">

    <div class="col-sm-12">
      <input type="text" class="form-control1" id="focusedinput" name="gmeurl" placeholder=" ">
      <button type="submit" name="gmsave" class="btn btn-default">
        Create
      </button>
    </div>
  </div>
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