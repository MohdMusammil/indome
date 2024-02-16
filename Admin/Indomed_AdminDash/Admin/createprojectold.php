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

if(isset($_POST['submit']))
{
//extract($_POST);
$PName = mysqli_real_escape_string($conn, $_POST['PName']);
$CPName = mysqli_real_escape_string($conn, $_POST['CPName']);
$Mobile = mysqli_real_escape_string($conn, $_POST['Mobile']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$Country = mysqli_real_escape_string($conn, $_POST['Country']);
$PPlace = mysqli_real_escape_string($conn, $_POST['PPlace']);
$ProjectCategory = mysqli_real_escape_string($conn, $_POST['ProjectCategory']);
$POutcome = mysqli_real_escape_string($conn, $_POST['POutcome']);
$Cost = mysqli_real_escape_string($conn, $_POST['Cost']);
$OtherPartnersName = mysqli_real_escape_string($conn, $_POST['OtherPartnersName']);
$projectIMG = mysqli_real_escape_string($conn, $_POST['projectIMG']);
$PDate = mysqli_real_escape_string($conn, $_POST['PDate']);

if (count($errors) == 0) {
	$sql = "INSERT INTO master_projects (PName, CPName, Mobile, Email, Country, PPlace, ProjectCategory, POutcome, Cost, OtherPartnersName, projectIMG, PDate) VALUES ('$PName', '$CPNamel', '$Mobile', '$Country', '$PPlace', '$ProjectCategory', '$POutcome', '$Cost', '$OtherPartnersName', '$projectIMG', '$PDate')";
	//$sql="INSERT INTO master_jobs (cname, ctype, contactperson, email, mobile, date, comments, worktype, T1user) VALUES ('$cname','$ctype','$contactperson','$email','$mobile', CURRENT_DATE(), '$comments', '$wtype', '$T1user')";
	mysqli_query($conn, $sql);
	header("location:../Admin/assignteam.php?name=success");
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
                              <form class="form-horizontal" method="post">
                                 <div class="form-group">
                                    <label for="focusedinput" class="col-sm-4 control-label">Project Name </label>
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
                                    <label for="focusedinput" class="col-sm-4 control-label">Contact Person Name </label>
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
                                    <label for="focusedinput" class="col-sm-4 control-label">Mobile </label>
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
                                    <label for="focusedinput" class="col-sm-4 control-label">Email ID </label>
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
                                    <label for="focusedinput" class="col-sm-4 control-label">Country </label>
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
                                    <label for="focusedinput" class="col-sm-4 control-label">Place of Project </label>
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
                                    <label for="focusedinput" class="col-sm-4 control-label">Date of Project </label>
                                    <div class="col-sm-4">
                                       <input
                                          type="text"
                                          class="form-control1"
                                          id="focusedinput"
                                          name="Date"
                                          placeholder=" "
                                          />
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="focusedinput" class="col-sm-4 control-label">Choose Project Category </label>
                                    <div class="col-sm-4">
                                       <select name="Team_Name" id="Team_Name" class="form-control1">
                                          <option value="">select</option>
                                          <option value="Marketing Team">Menstrual health</option>
                                          <option value="Processing Team">Education</option>
                                          <option value="Quality Team">Womens Health</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="focusedinput" class="col-sm-4 control-label">Outcome of the Project </label>
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
                                    <label for="focusedinput" class="col-sm-4 control-label">Cost  </label>
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
                                    <label for="focusedinput" class="col-sm-4 control-label">NGO / CSR Partners if any with contact name </label>
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
                                    <label for="focusedinput" class="col-sm-4 control-label">Project Image </label>
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