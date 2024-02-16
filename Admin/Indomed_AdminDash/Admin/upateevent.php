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

$query=mysqli_query($conn,"select * from events where e_id='$x'");
$res=mysqli_fetch_assoc($query);

extract($res);

extract($_REQUEST);
if(isset($update))
{
$img=$_FILES['pic']['ename'];	
// $qua=implode(",",$chk);	
	if($img=="")
	{	
		$query="UPDATE events SET ename='$en',desc='$desc',dob='$dob',place='$place',emode='$emode'WHERE e_id='$x'";
		mysqli_query($conn,$query);	
	}
	else
	{
	//delete old pic 
	unlink("image/$en/$pic");
	move_uploaded_file($_FILES['pic']['tmp_name'],"image/$en/".$_FILES['pic']['ename']);	
	
    $query="UPDATE events SET ename='$en',desc='$desc',dob='$dob',place='$place',emode='$emode',pic='$img' where e_id='$x'";
	mysqli_query($con,$query);	
	
	}
	header( "refresh:2;url=event.php" ); 
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
                        <h3 class="inner-tittle two">Update Event</h3>
                        <div class="grid-1">
                           <div class="form-body">

                           <form class="form-horizontal" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="form-group col-sm-4 control-label">Event Name</tD>
					<td><input type="text" class="form-control1" value="<?php echo $ename; ?>" name="en"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Event Description</tD>
					<td><input type="text" class="form-control1" value="<?php echo $desc; ?>" name="desc"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Date of Project</tD>
					<td><input type="date" class="form-control1" value="<?php echo $dob; ?>" name="dob"></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">place</tD>
					<td><input type="text" class="form-control1" value="<?php echo $place; ?>" name="place"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Select event mode</tD>
					<td>
					
					<select name="emode" class="form-control1">
                    <option <?php if($emode=="Outdoor"){echo "selected";} ?>>Outdoor</option>
						<option <?php if($emode=="Indoor"){echo "selected";} ?>>Indoor</option>
						<option <?php if($emode=="Online"){echo "selected";} ?>>Online</option>
					</select>
					</td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Upload Your profile pic</tD>
					<td>
                    <?php $path="image/$ename/$pic"; ?>
					<input type="file" name="pic">					
					<img src="<?php echo $path; ?>" width="50px" height="50px"/>
                    </td>
				</tR>
				<tr>               
			<td align="center" colspan="2">
				<input type="submit" name="update" value="Save Data"/>
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