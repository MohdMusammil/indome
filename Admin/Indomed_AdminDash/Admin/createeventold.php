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
	$query="select * from events where ename='$en' ";
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
	$image=$_FILES['pic']['name'];
	
	
	//qualification
	//$qua=implode(",",$chk);
  $sql = "INSERT INTO events (`e_id`, `ename`, `desc`, `dob`, `place`, `emode`, `pic`) VALUES (\'1\', \'event1\', \'short desc about event 1\', \'2021-11-24\', \'trichy\', \'online\', \'ev1.png\');";
	
  // $query="insert into projects values('','$n','$cpn','$e','$m','$country','$city','$dob','$cate','$pout','$pcost','$pname','$pnote','$image',now())";	

  // $query="INSERT INTO events VALUES ('','$en','$desc','$dob','$place','$emode','$image',now())";
	
  //  $query="insert into events values('','$en','$desc','$date','$place','$emode','$image',now())";	
	//upload image
	mkdir("image/$en");
	move_uploaded_file($_FILES['pic']['tmp_name'],"image/$en/".$_FILES['pic']['name']);
	
	
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
                                                    <h3 class="inner-tittle two">Create Event</h3>
                                                        <div class="grid-1">
                                                                <div class="form-body">

                                                                <form method="post" enctype="multipart/form-data">
			<table border="1" style='width:40%;float:left;margin-left:5%'>
				<tr>
					<td>Event Name</tD>
					<td><input type="text" name="en"/></td>
				</tR>
				<tr>
					<td>Event Description</tD>
					<td><input type="text" name="desc"/></td>
				</tR>
				<tr>
					<td>Select Event Date</tD>
					<td><input type="date" name="dob"></td>
				</tR>
				<tr>
					<td>Place</tD>
					<td><input type="text" name="place"/></td>
				</tR>
				<tr>
					<td>Select Event Mode</tD>
					<td>
					
					<select name="emode">
						<option value="">Select  State</option>
						<option>Outdoor</option>
						<option>Indoor</option>
						<option>Online</option>
					</select>
					</td>
				</tR>
				<tr>
					<td>Upload Your profile pic</tD>
					<td><input type="file" name="pic"></td>
				</tR>
				<tr>
			<td align="center" colspan="2">
				<input type="submit" name="save" value="Save Data"/>
				</td>
				</tR>
			</table>
		</form>

                                                                <form class="form-horizontal" method="post">
  <div class="form-group">
    <label for="focusedinput" class="col-sm-4 control-label">Event Name </label>

    <div class="col-sm-4">
      <input
        type="text"
        class="form-control1"
        id="focusedinput"
        name="Name"
        placeholder="Name"
      />
    </div>
    <div class="col-sm-2">
      <!-- <p class="help-block">Your help text!</p> -->
    </div>
  </div>

  <div class="form-group">
    <label for="focusedinput" class="col-sm-4 control-label">Description </label>

    <div class="col-sm-4">
      <input
        type="email"
        name="Email"
        class="form-control1"
        id="focusedinput"
        placeholder="abc@abc.com"
      />
    </div>
  </div>
  <div class="form-group">
    <label for="focusedinput" class="col-sm-4 control-label">Date / Time </label>

    <div class="col-sm-4">
      <input
        type="text"
        class="form-control1"
        id="focusedinput"
        name="Mobile"
        placeholder=" "
      />
    </div>
  </div>

  <div class="form-group">
    <label for="focusedinput" class="col-sm-4 control-label">Place </label>

    <div class="col-sm-4">
      <input
        type="text"
        class="form-control1"
        id="focusedinput"
        name="City"
        placeholder=" "
      />
    </div>
  </div>
  <div class="form-group">
    <label for="focusedinput" class="col-sm-4 control-label">Default IMG </label>

    <div class="col-sm-4">
      <input
        type="text"
        class="form-control1"
        id="focusedinput"
        name="City"
        placeholder=" "
      />
      <button type="submit" name="submit" class="btn btn-default">
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