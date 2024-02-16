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
	$query="select * from ppt where pname='$pn' ";
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
	// $image=$_FILES['pic']['name'];
	
	
	//qualification
	//$qua=implode(",",$chk);
	
	
   $query="insert into ppt values('','$pn','$purl')";	
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
                        <h3 class="inner-tittle two">Create PPT</h3>
                        <div class="grid-1">
                           <div class="form-body">

                           <form class="form-horizontal" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="form-group col-sm-4 control-label">PPT Title</tD>
					<td><input type="text" class="form-control1" name="pn"/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">PPT URL</tD>
					<td><input type="text" class="form-control1" name="purl"/></td>
				</tR>
				<tr>               
			<td align="center" colspan="2">
				<input type="submit" name="save" value="Save Data"/>
				</td>
				</tR>
			</table>
		</form>
		<h3 class="inner-tittle two">PPT List</h3>

								
</div>
									
									<div class="graph">
        <div class="tables" style="overflow-x:auto;">
                <table class="table table-bordered"> <thead> 
                    <!-- <tr> <th># Job Id</th> <th>Job Name</th> <th>Type</th> <th>Month / Year</th><th>Job creator</th><th> P user / Status</th><th> QA user / Status</th><th> Payment</th> </tr> </thead>  -->
                    <tbody> 
					<?php 
//display All records
	// echo "<table border='1' style='width:40%;float:left;margin-left:2%'>";
	echo "<Tr><th>Sr.No</th><th>PPT Title</th><th>URL</th>
	<th>Delete</th></tR>";
	
	$sql=mysqli_query($conn,"select * from ppt");
	$i=1;
	while($res=mysqli_fetch_assoc($sql))
	{
	$id=$res['p_id'];	
	$bn=$res['pname'];

	
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$res['pname']."</td>";
	echo "<td>".$res['purl']."</td>";

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
				window.location.href='pptdelete.php?p_id='+x;	
					
				}					
			}
		</script>
   </body>
</html>