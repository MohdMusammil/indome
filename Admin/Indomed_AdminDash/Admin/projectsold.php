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

<h3 class="inner-tittle two">Project List</h3>  <a href="createproject.php">                                                                                   
<button type="submit" name="submit" class="btn btn-default">Create Project</button></a>
<div class="graph">
        <div class="tables" style="overflow-x:auto;">
                <table class="table table-bordered"> <thead> 
<tr><th>S.no</th><th>Project Name</th><th>Porject IMG</th><th>Content</th><th>Project Info / Tagline</th><th>Edit / Delete</th></tr>
                <!-- <tr> <th>S.no</th><th># Job Id</th> <th>Job Name</th> <th>Type</th> <th>Month / Year</th><th>Job creator</th><th> P user / Status</th><th> QA user / Status</th> </tr> </thead>  -->
                    <tbody> 
<?php 

// include_once 'db/db_connect.php';


// $result=mysql_query("SELECT * FROM master_jobs WHERE id=".$_SESSION['id']);
// include_once'../../DB/db_connect.php';
// $conn = OpenCon();
// $sql = "SELECT cname, id, date, jobcode, ctype from master_jobs";
// $result = $conn->query($sql);
// if ($result-> num_rows > 0){
// 	while ($row = $result-> fetch_assoc()){
// 		echo "</td><td>".$row["jobcode"].$row["id"]."</td><td>".$row["cname"]."</td><td>".$row["ctype"]."</td><td>".$row["date"]."</td><td>edit</td></tr>";
// 	}
// 	echo "</table>";
// }else {
// 	echo "0 result";
// }
?>
<?php
include_once'../../DB/db_connect.php';
$conn = OpenCon();
$count=1;
$limit = 10;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
$sel_query="SELECT * FROM `master_projects` WHERE id ORDER BY `id` DESC LIMIT $start_from, $limit";
//$sel_query="SELECT cname, id, date, jobcode, ctype  from master_jobs";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td ><?php echo $row["jobcode"].$row["id"]; ?></td><td><?php echo $row["projectname"]; ?></td><td><?php echo $row["projectIMG"]; ?></td><td><?php echo $row["content"]; ?></td><td><?php echo $row["projectTagline"]; ?></td><td>Edit / Delete</td></tr>
<?php $count++; } ?>
                        <!-- <tr> <th scope="row">EEA001</th> <td>Client Name 1</td> <td>Type1</td> <td>April, 2019</td> </tr> 
                        <tr> <th scope="row">EEA002</th> <td>Client Name 2</td> <td>Type2</td> <td>April, 2019</td> 
                        </tr> <tr> <th scope="row">EEA003</th> <td>Client Name 3</td> <td>Type3</td> <td>March, 2019</td> </tr>  -->
                         
                        </tbody> </table>
            </div>

			<?php  
$sql = "SELECT COUNT(id) FROM master_projects";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<div class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<a href='clientlist.php?page=".$i."'>".$i."</a>";  
};  
echo $pagLink . "</div>";  
?>
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
</body>
</html>