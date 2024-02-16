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
<body>
<?php include"includes/header.php"; ?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
	   <?php include"includes/topbar.php"; ?>

						<div class="outter-wp">
						<div class="bottom-grids">
										<div class="dev-table">    
											<div class="col-md-3 col-sm-3 dev-col">                                    
<a href="createblog.php">
                                            <div class="dev-widget dev-widget-transparent">
                                                <h2 class="inner one"><span><i class="fa fa-blog"></i></span>
													Blog</h2>
                                                <p></p>                                        
                                                <p></p>

                                                <!-- <a href="#" class="dev-drop">Add Client <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>
                                        <div class="col-md-3 col-sm-3 dev-col mid">                                    
<a href="createppt.php">
                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                 <h3 class="inner"><span><i class="fa fa-file-powerpoint-o"></i></span> PPT</h3>
                                                <p></p>                                        
                                                <p></p>

                                                <!-- <a href="#" class="dev-drop">Assign Job <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>
                                        <div class="col-md-3 col-sm-3 dev-col mid">                                    
<a href="createds.php">
                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                 <h3 class="inner"><span><i class="fa fa-file"></i></span> Data Sheets</h3>


                                                <!-- <a href="#" class="dev-drop">Assign Job <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>
                                        <div class="col-md-3 col-sm-3 dev-col mid">                                    
<a href="createproduct.php">
                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                 <h3 class="inner"><span><i class="fa fa-box"></i></span>Product Sourcing</h3>


                                                <!-- <a href="#" class="dev-drop">Assign Job <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>
                                <h3 class="inner-tittle two">Gallery List</h3>
								<a href="creategal.php">                                                                                   
<button type="submit" name="submit" class="btn btn-default">Create Gallery</button></a>
								
</div>
									
									<div class="graph">
        <div class="tables" style="overflow-x:auto;">
                <table class="table table-bordered"> <thead> 
                    <!-- <tr> <th># Job Id</th> <th>Job Name</th> <th>Type</th> <th>Month / Year</th><th>Job creator</th><th> P user / Status</th><th> QA user / Status</th><th> Payment</th> </tr> </thead>  -->
                    <tbody> 
					<?php 
//display All records
	// echo "<table border='1' style='width:40%;float:left;margin-left:2%'>";
	echo "<Tr><th>Sr.No</th><th>Gallery Name</th><th>Pic</th>
	<th>Delete</th></tR>";
	
	$sql=mysqli_query($conn,"select * from gal");
	$i=1;
	while($res=mysqli_fetch_assoc($sql))
	{
	$id=$res['g_id'];	
	$img=$res['pic'];	
	$en=$res['gname'];

	
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$res['gname']."</td>";
	echo "<td><img src='image/$en/$img'
	width='100px'/></td>";

	// echo "<td><a href='upateevent.php?id=$id'>Update</a></td>";
	echo "<td><a href='#' onclick='deleteRecord(".$id.")'>Delete</a></td>";
	
	echo "</tr>";
	$i++;
	}
	// echo "</table>";
?>                      <!-- <tr> <th scope="row">EEA001</th> <td>Client Name 1</td> <td>Type1</td> <td>April, 2019</td> </tr> 
                        <tr> <th scope="row">EEA002</th> <td>Client Name 2</td> <td>Type2</td> <td>April, 2019</td> 
                        </tr> <tr> <th scope="row">EEA003</th> <td>Client Name 3</td> <td>Type3</td> <td>March, 2019</td> </tr>  -->
                         
                        </tbody> 
		
						</table>       </form>                                     </div>
                        
										<div class="clearfix"></div>		
										
										</div>
										</div>
                                    </div>
										<div class="clearfix"></div>		
										<div class="set-1">
											<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
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
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <script>
			function deleteRecord(x)
			{
				if(confirm("You want to delete  ?"))
				{
				window.location.href='gdelete.php?g_id='+x;	
					
				}					
			}
		</script>
</body>
</html>