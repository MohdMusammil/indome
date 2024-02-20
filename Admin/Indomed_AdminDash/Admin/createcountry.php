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
      <style>
        /* Basic styles for the text editor */
        .editor {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 10px;
        }
        /* Enlarged editor size */
        #content {
            border: 1px solid #ccc;
            padding: 10px;
            min-height: 300px; /* Adjust height as needed */
            width: 100%; /* Full width */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
            resize: vertical; /* Allow vertical resizing */
            overflow: auto; /* Add scrollbars if content exceeds height */
        }
    </style>
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
                        <h3 class="inner-tittle two">Create Country</h3>
                        <div class="grid-1">
                           <div class="form-body">

                           <form class="form-horizontal" method="post" enctype="multipart/form-data">
			<table>

			<label for="title">Country Name:</label>
        <input type="text" name="title" id="title" required>
        <input type="hidden" name="slug" id="slug">

        <label for="subtitle">Subtitle:</label>
        <input type="text" name="subtitle" id="subtitle">

        <label for="content">Content:</label>
        <!-- Simple text editor -->
        <div class="editor">
            <button type="button" onclick="document.execCommand('bold')">Bold</button>
            <button type="button" onclick="document.execCommand('italic')">Italic</button>
            <button type="button" onclick="document.execCommand('underline')">Underline</button>
            <button type="button" onclick="document.execCommand('insertOrderedList')">Numbered List</button>
            <button type="button" onclick="document.execCommand('insertUnorderedList')">Bullet List</button>
            <button type="button" onclick="document.execCommand('justifyLeft')">Align Left</button>
            <button type="button" onclick="document.execCommand('justifyCenter')">Align Center</button>
            <button type="button" onclick="document.execCommand('justifyRight')">Align Right</button>
            <button type="button" onclick="document.execCommand('createLink', false, prompt('Enter URL:'))">Insert Link</button>
            <button type="button" onclick="document.execCommand('undo')">Undo</button>
            <button type="button" onclick="document.execCommand('redo')">Redo</button>
        </div>
        <div contenteditable="true" id="content" style="border: 1px solid #ccc; padding: 5px;" required></div>
        <input type="hidden" name="content" id="content_hidden">
        
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept="image/*">
        <input type="submit" name="submit" value="Add Post">

				<!-- <tr>
					<td class="form-group col-sm-4 control-label">College Title</tD>
					<td><input  type="text" class="form-control1" name="title" id="title" required/></td>
				</tR>
				<tr>
					<td class="form-group col-sm-4 control-label">Sub page</tD>
					<td><input type="text" class="form-control1" name="subtitle" id="subtitle"/></td>
				</tR>
				<tr>               
			<td  colspan="2">
				<input type="submit" name="save" value="Save Data"/>
				</td>
				</tR> -->
			</table>
		</form>
		<h3 class="inner-tittle two">College List</h3>

								
</div>
									
									<div class="graph">
        <div class="tables" style="overflow-x:auto;">
                <table class="table table-bordered"> <thead> 
                    <tbody> 
					<?php 
//display All records
	// echo "<table border='1' style='width:40%;float:left;margin-left:2%'>";
	echo "<Tr><th>S.No</th><th>Country Name</th><th>URL</th>
	<th>Edit / Delete</th></tR>";
	
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