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
	$query="select * from blog where bname='$bn' ";
	$sql=mysqli_query($conn,$query);
	
	//select record
	$row=mysqli_num_rows($sql);	
	if($row==1)
	{
		echo "<h3 style='color:red;margin-left:100px'>This email alredy exists</h3>";
	}
	else
	{
			
		

	
   $query="insert into blog values('','$bn','$burl')";	
	//upload image
	
	
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
					<td class="form-group col-sm-4 control-label">Blog Title</tD>
					<td><input type="text" class="form-control1" name="bn"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Blog URL</tD>
					<td><input type="text" class="form-control1" name="burl"/></td>
				</tR>
				<tr>               
			<td  colspan="2">
				<input type="submit" name="save" value="Save Data"/>
				</td>
				</tR>
			</table>
		</form>
		<h3 class="inner-tittle two">Blog List</h3>

								
</div>
									
									<div class="graph">
        <div class="tables" style="overflow-x:auto;">
                <table class="table table-bordered"> <thead> 
                    <!-- <tr> <th># Job Id</th> <th>Job Name</th> <th>Type</th> <th>Month / Year</th><th>Job creator</th><th> P user / Status</th><th> QA user / Status</th><th> Payment</th> </tr> </thead>  -->
                    <tbody> 
					<?php 
//display All records
	// echo "<table border='1' style='width:40%;float:left;margin-left:2%'>";
	echo "<Tr><th>Sr.No</th><th>Blog Title</th><th>URL</th>
	<th>Delete</th></tR>";
	
	$sql=mysqli_query($conn,"select * from blog");
	$i=1;
	while($res=mysqli_fetch_assoc($sql))
	{
	$id=$res['b_id'];	
	$bn=$res['bname'];	

	
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$res['bname']."</td>";
	echo "<td>".$res['burl']."</td>";

	// echo "<td><a href='upateevent.php?id=$id'>Update</a></td>";
	echo "<td><a href='#' onclick='deleteRecord(".$id.")'>Delete</a></td>";
	
	echo "</tr>";
	$i++;
	}
	// echo "</table>";
?>                                               
                        </tbody> 
		
						</table>       </form>                                     </div>
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
	  <script>
			function deleteRecord(x)
			{
				if(confirm("You want to delete  ?"))
				{
				window.location.href='blogdelete.php?b_id='+x;	
					
				}					
			}
		</script>
   </body>
</html>