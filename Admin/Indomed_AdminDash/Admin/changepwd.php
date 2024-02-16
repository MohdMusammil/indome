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


if(isset($_POST['update']))
{
$old_pass=$_POST['old_pass'];
$new_pass=$_POST['new_pass'];
$re_pass=$_POST['re_pass'];
// $chg_pwd=mysql_query("select * from users where id='1'");
// $chg_pwd1=mysql_fetch_array($chg_pwd);
$data_pwd=$userRow['password'];
if($data_pwd==$old_pass){
if($new_pass==$re_pass){
	$update_pwd=mysqli_query($conn, "update master_adminuser set password='$new_pass' WHERE id=".$_SESSION['user']);
	echo "<script>alert('Update Sucessfully'); window.location='changepwd.php'</script>";
}
else{
	echo "<script>alert('Your new and Retype Password is not match'); window.location='changepwd.php'</script>";
}
}
else
{
echo "<script>alert('Your old password is wrong'); window.location='changepwd.php'</script>";
}}

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


										<!--/bottom-grids-->		 
                                        <div class="set-1">
                                                <div class="graph-2 general">
                                                    <h3 class="inner-tittle two">Update Profile  </h3>
                                                        <div class="grid-1">
                                                                <div class="form-body">
                                                                        <form class="form-horizontal" method="post">
                                                                            <div class="form-group">
                                                                                <label for="focusedinput" class="col-sm-2 control-label">Old Password </label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="password" class="form-control1" name="old_pass" id="exampleInputPassword1" placeholder="">
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <!-- <p class="help-block">Your help text!</p> -->
                                                                                </div>
                                                                            </div>

                                                                                <div class="form-group">
                                                                                        <label for="disabledinput" class="col-sm-2 control-label">New Password</label>
                                                                                        <div class="col-sm-8">
                                                                                            <input  type="password"  class="form-control1" name="new_pass" id="exampleInputPassword1" placeholder="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                            <label for="disabledinput" class="col-sm-2 control-label">Confirm New Password</label>
                                                                                            <div class="col-sm-8">
                                                                                                <input  type="password" class="form-control1" name="re_pass" id="exampleInputPassword1" placeholder=" ">
                                                                                                <button type="submit" name="update" class="btn btn-default">Update</button>
                                                                                                <button type="reset" class="btn btn-default">Reset</button>
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