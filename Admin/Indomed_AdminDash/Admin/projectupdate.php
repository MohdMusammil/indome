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

$x=$_REQUEST['id'];

$query=mysqli_query($conn,"select * from projects where user_id='$x'");
$res=mysqli_fetch_assoc($query);
$img=$res['pic'];	
$n=$res['name'];
extract($res);

extract($_REQUEST);
if(isset($update))
{
$img=$_FILES['pic']['name'];	
//$qua=implode(",",$chk);	
	if($img=="")
	{	
    $query="UPDATE projects SET name='$n',cpname='$cpn',email='$e',mobile='$m',country='$country',city='$city',dob='$dob',cate='$cate',pout='$pout',pcost='$pcost',partnername='$pname',pnote='$pnote'where user_id='$x'";
	// $query="update projects SET name='$n',cpname='$cpn',email='$e',mobile='$m',country='$country',city='$city',dob='$dob',cate='$cate',pout='$pout',pcost='$pcost',parntername='$pname',pnote='$pnote' where user_id='$x'";
	mysqli_query($conn,$query);	
	}
	else
	{
	//delete old pic 
	unlink("image/$n/$img");
    
	move_uploaded_file($_FILES['pic']['tmp_name'],"image/$n/".$_FILES['pic']['name']);	
    $query="UPDATE projects SET name='$n',cpname='$cpn',email='$e',mobile='$m',country='$country',city='$city',dob='$dob',cate='$cate',pout='$pout',pcost='$pcost',partnername='$pname',pnote='$pnote',pic='$img' where user_id='$x'";

	// $query="update projects SET name='$n',cpname='$cpn',email='$e',mobile='$m',country='$country',city='$city',dob='$dob',cate='$cate',pout='$pout',pcost='$pcost',parntername='$pname',pnote='$pnote',pic='$img' where user_id='$x'";
	mysqli_query($conn,$query);	
	
	}
	header( "refresh:2;url=projects.php" ); 
	echo '<h3>Records updated successfully</h3>'; 

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
                        <h3 class="inner-tittle two">Create Project</h3>
                        <div class="grid-1">
                           <div class="form-body">
                           <form class="form-horizontal" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="form-group col-sm-4 control-label">Enter Project Name</tD>
					<td><input type="text" class="form-control1" readonly="readonly" value="<?php echo $name; ?>" name="n"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Contact Person Name</tD>
					<td><input type="text" class="form-control1" value="<?php echo $cpname; ?>" name="cpn"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Email  ID</tD>
					<td><input type="email" class="form-control1" value="<?php echo $email; ?>" name="e"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Mobile</tD>
					<td><input type="number" class="form-control1" value="<?php echo $mobile; ?>" name="m"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Country</tD>
					<td><input type="text" class="form-control1" value="<?php echo $country; ?>" name="country"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Place of Project</tD>
					<td><input type="text" class="form-control1" value="<?php echo $city; ?>" name="city"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Date of Project</tD>
					<td><input type="date" class="form-control1" value="<?php echo $dob; ?>" name="dob"></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Select Your State</tD>
					<td>
					
					<select name="cate" class="form-control1">
						<option <?php if($cate=="Menstrual health"){echo "selected";} ?>>Menstrual health</option>
						<option <?php if($cate=="Education"){echo "selected";} ?>>Education</option>
						<option <?php if($cate=="Womens Health"){echo "selected";} ?>>Womens Health</option>
					</select>
					</td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Outcome of Project</tD>
					<td><input type="text" class="form-control1" value="<?php echo $pout; ?>" name="pout"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Cost of Project</tD>
					<td><input type="text" class="form-control1" value="<?php echo $pcost; ?>" name="pcost"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Partnername</tD>
					<td><input type="text" class="form-control1" value="<?php echo $partnername; ?>" name="pname"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Projct Notes</tD>
					<td><input type="text" class="form-control1" value="<?php echo $pnote; ?>" name="pnote"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Upload Your profile pic</tD>
                    <td>
					<?php $path="image/$n/$img"; ?>
					<input type="file" name="pic">					
					<img src="<?php echo $path; ?>" width="50px" height="50px"/>
					</td>
				</tR>
				<tr>               
			<td align="center" colspan="2">
				<input type="submit" name="update" value="Update Data"/>
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