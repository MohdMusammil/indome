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
	$query="select * from projects where name='$n' ";
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
	
	
   $query="insert into projects values('','$n','$cpn','$e','$m','$country','$city','$dob','$cate','$pout','$pcost','$pname','$pnote','$image',now())";	
	//upload image
	mkdir("image/$n");
	move_uploaded_file($_FILES['pic']['tmp_name'],"image/$n/".$_FILES['pic']['name']);
	
	
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
                        <h3 class="inner-tittle two">Create Project</h3>
                        <div class="grid-1">
                           <div class="form-body">

                           <form class="form-horizontal" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="form-group col-sm-4 control-label">Enter Project Name</tD>
					<td><input type="text" class="form-control1" name="n"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Contact Person Name</tD>
					<td><input type="text" class="form-control1" name="cpn"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Email  ID</tD>
					<td><input type="email" class="form-control1" name="e"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Mobile</tD>
					<td><input type="number" class="form-control1" name="m"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Country</tD>
					<td><input type="text" class="form-control1" name="country"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Place of Project</tD>
					<td><input type="text" class="form-control1" name="city"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Date of Project</tD>
					<td><input type="date" class="form-control1" name="dob"></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Select Your State</tD>
					<td>
					
					<select name="cate" class="form-control1">
						<option value="">Project category</option>
						<option>Menstrual health</option>
						<option>Education</option>
						<option>Womens Health</option>
					</select>
					</td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Outcome of Project</tD>
					<td><input type="text" class="form-control1" name="pout"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Cost of Project</tD>
					<td><input type="text" class="form-control1" name="pcost"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Partnername</tD>
					<td><input type="text" class="form-control1" name="pname"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Projct Notes</tD>
					<td><input type="text" class="form-control1" name="pnote"/></td>
				</tR>
            <tr>
					<td class="form-group col-sm-4 control-label">Upload Your profile pic</tD>
					<td><input type="file" class="form-control1" name="pic"></td>
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