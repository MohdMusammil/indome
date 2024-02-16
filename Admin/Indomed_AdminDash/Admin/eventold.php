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

                                <h3 class="inner-tittle two">Event List</h3>
								<a href="createevent.php">                                                                                   
<button type="submit" name="submit" class="btn btn-default">Create Event</button></a>
								
</div>
									
									<div class="graph">
        <div class="tables" style="overflow-x:auto;">
                <table class="table table-bordered"> <thead> 
                    <tr><th>S.No</th><th>Event Name</th><th>Short Description</th><th>Date/Time</th><th>Place</th><th>Mode</th></tr>
                    <!-- <tr> <th># Job Id</th> <th>Job Name</th> <th>Type</th> <th>Month / Year</th><th>Job creator</th><th> P user / Status</th><th> QA user / Status</th><th> Payment</th> </tr> </thead>  -->
                    <tbody> 
					<?php 
					if(isset($_POST['search']))
					{
						$valueToSearch = $_REQUEST['valueToSearch'];
						$valueToActive = $_REQUEST['valueToActive'];
						// search in all table columns
						// using concat mysql function
						//$query = "SELECT * FROM master_jobs where T2supdate='$valueToActive'";
						//$query ="SELECT T1user, T2supdate from master_jobs LIKE '%".$valueToSearch."%'";
						$query = "SELECT * FROM master_jobs WHERE T1user LIKE '%".$valueToSearch."%' OR T2user LIKE '%".$valueToSearch."%' OR T3user LIKE '%".$valueToSearch."%' OR T2supdate LIKE '%".$valueToActive."%' OR T3supdate LIKE '%".$valueToActive."%'";
						$search_result = filterTable($query);
						
					}
					 else {
						$query = "SELECT * FROM master_jobs";
						$search_result = filterTable($query);
					}
					
					// function to connect and execute the query
					function filterTable($query)
					{
						//$connect = mysqli_connect("localhost", "root", "", "eagleeyes");
						$conn =new mysqli('localhost', 'root', '' , 'eagleeyes');
					
						$filter_Result = mysqli_query($conn, $query);
						return $filter_Result;
					}
					while($row = mysqli_fetch_array($search_result)):?>

<!-- <tr><td ><?php echo $row["jobcode"].$row["id"]; ?></td><td><?php echo $row["cname"]; ?></td><td><?php echo $row["ctype"]; ?></td><td><?php echo $row["date"]; ?></td><td><?php echo $row["T1user"]; ?></td><td><?php echo $row["T2user"].' / '.$row["T2supdate"]; ?></td><td><?php echo $row["T3user"].' / '.$row["T3supdate"]; ?></td><td><?php echo $row["Payment"]; ?></td></tr> -->
<?php endwhile;?>
                        <!-- <tr> <th scope="row">EEA001</th> <td>Client Name 1</td> <td>Type1</td> <td>April, 2019</td> </tr> 
                        <tr> <th scope="row">EEA002</th> <td>Client Name 2</td> <td>Type2</td> <td>April, 2019</td> 
                        </tr> <tr> <th scope="row">EEA003</th> <td>Client Name 3</td> <td>Type3</td> <td>March, 2019</td> </tr>  -->
                         
                        </tbody> 
		
						</table>       </form>                                     </div>
                        <div class="bottom-grids">
										<div class="dev-table">    
											<div class="col-md-4 col-sm-4 dev-col">                                    
<a href="createsmevent.php">
                                            <div class="dev-widget dev-widget-transparent">
                                                <h2 class="inner one"><span><i class="fa fa-facebook-square"></i></span>
													Facebook Live</h2>
                                                <p></p>                                        
                                                <p></p>

                                                <!-- <a href="#" class="dev-drop">Add Client <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>
                                        <div class="col-md-4 col-sm-4 dev-col mid">                                    
<a href="createsmevent.php">
                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                 <h3 class="inner"><span><i class="fa fa-youtube-play"></i></span> Youtube Live</h3>
                                                <p></p>                                        
                                                <p></p>

                                                <!-- <a href="#" class="dev-drop">Assign Job <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>
                                        <div class="col-md-4 col-sm-4 dev-col mid">                                    
<a href="createsmevent.php">
                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                 <h3 class="inner"><span><i class="fa fa-users"></i></span> Zoom Meetup</h3>


                                                <!-- <a href="#" class="dev-drop">Assign Job <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>

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
</body>
</html>