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
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 30px;
  height: 30px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #721C59;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head> 
<body>
<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<?php include"includes/header.php"; ?>
   <div class="page-container animate-bottom" style="display:none;" id="myDiv">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
	   <?php include"includes/topbar.php"; ?>

						<div class="outter-wp">


										<!--/bottom-grids-->		 
									<div class="bottom-grids">
										<div class="dev-table">    
											<div class="col-md-3 col-sm-3 dev-col">                                    
<a href="projects.php">
                                            <div class="dev-widget dev-widget-transparent">
                                                <h2 class="inner one"><span><i class="fa fa-pencil"></i></span>
													View Blogs</h2>
                                                <p></p>                                        
                                                <p></p>

                                                <!-- <a href="#" class="dev-drop">Add Client <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>
                                        <div class="col-md-3 col-sm-3 dev-col mid">                                    
<a href="event.php">
                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                 <h3 class="inner"><span><i class="fa fa-tasks"></i></span> Events</h3>
                                                <p></p>                                        
                                                <p></p>

                                                <!-- <a href="#" class="dev-drop">Assign Job <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>
                                        <div class="col-md-3 col-sm-3 dev-col mid">                                    
<a href="videos.php">
                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                 <h3 class="inner"><span><i class="fa fa-play"></i></span>  videos</h3>
                                                <p></p>                                        
                                                <p></p>

                                                <!-- <a href="#" class="dev-drop">Assign Job <span class="fa fa-angle-right pull-right"></span></a> -->
                                            </div></a>

                                        </div>
                                        <div class="col-md-3 col-sm-3 dev-col">                                    
<a href="resources.php">
                                            <div class="dev-widget dev-widget-transparent dev-widget-danger">
                                                 <h3 class="inner"><span><i class="fa fa-gear"></i></span> Resources</h3>
                                                <p></p>
                                                                                       
                                                <p></p>

                                                <!-- <a href="#" class="dev-drop">clieck Here <span class="fa fa-angle-right pull-right"></span></a>                                         -->
                                            </div></a>

                                        </div>
										<div class="clearfix"></div>		
										
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
   <script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>