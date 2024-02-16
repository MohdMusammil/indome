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


?>
 <html>
<head>
<title>Indomed Educare</title>

</head> 
<style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border: 1px solid #ddd;
}

.pagination a.active {
  background-color: #631E5D;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #631E5D;}

.pagination a:first-child {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.pagination a:last-child {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
</style>
<body>
<?php include"includes/header.php"; ?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
	   <?php include"includes/topbar.php"; ?>

                    <div class="outter-wp">

<h3 class="inner-tittle two">Video List</h3>  <a href="createvideo.php">                                                                                   
<button type="submit" name="submit" class="btn btn-default">Create Videos</button></a>
<div class="graph">
        <div class="tables" style="overflow-x:auto;">
                <table class="table table-bordered"> <thead> 
                <!-- <tr> <th>S.no</th><th># Job Id</th> <th>Job Name</th> <th>Type</th> <th>Month / Year</th><th>Job creator</th><th> P user / Status</th><th> QA user / Status</th> </tr> </thead>  -->
                    <tbody> 
					<?php 
//display All records
	// echo "<table border='1' style='width:40%;float:left;margin-left:2%'>";
	echo "<Tr><th>Sr.No</th><th>Video Title</th><th>Video URL</th>
	<th>Delete</th></tR>";
	
	$sql=mysqli_query($conn,"select * from videos");
	$i=1;
	while($res=mysqli_fetch_assoc($sql))
	{
	$id=$res['v_id'];	
	$vn=$res['vname'];
	
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$res['vname']."</td>";
	echo "<td>".$res['vurl']."</td>";


	// echo "<td><a href='upateevent.php?id=$id'>Update</a></td>";
	echo "<td><a href='#' onclick='deleteRecord(".$id.")'>Delete</a></td>";
	
	echo "</tr>";
	$i++;
	}
	// echo "</table>";
?>
                        <!-- <tr> <th scope="row">EEA001</th> <td>Client Name 1</td> <td>Type1</td> <td>April, 2019</td> </tr> 
                        <tr> <th scope="row">EEA002</th> <td>Client Name 2</td> <td>Type2</td> <td>April, 2019</td> 
                        </tr> <tr> <th scope="row">EEA003</th> <td>Client Name 3</td> <td>Type3</td> <td>March, 2019</td> </tr>  -->
                         
                        </tbody> </table>
            </div>


    </div>
        <div class="clearfix"></div>		
        <div class="set-1">
			<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>	
         -->
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

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <script>
			function deleteRecord(x)
			{
				if(confirm("You want to delete  ?"))
				{
				window.location.href='vdelete.php?v_id='+x;	
					
				}					
			}
		</script>

</body>
</html>