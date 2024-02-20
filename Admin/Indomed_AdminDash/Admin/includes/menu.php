<html>
<head>
</head>
<body>
			<!--/sidebar-menu-->
			<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> 
						<span class="fa fa-bars"></span></a>
						 <a href="index.php"> <span id="logo"> <h1>IndoMed</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="adminindex.php"><img src="images/nlogo.png"></a>
									  <a href="adminindex.php"><span class=" name-caret"><?php echo $userRow['username']; ?></span></a>
									 <p> Administrator </p>
									<ul>
									<li><a class="tooltips" href="#"><span>Profile</span><i class="fa fa-user"></i></a></li>
										<li><a class="tooltips" href="adminindex.php"><span>Settings</span><i class="fa fa-gear"></i></a></li>
										<li><a class="tooltips" href="logout.php?logout"><span>Log out</span><i class="fa fa-power-off"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
	 <div class="menu">
			  <ul id="menu" >
				  <!-- <li><a href="changepwd.php"><i class="fa fa-refresh"></i> <span>Change Password</span></a></li> -->
				   <li id="menu-academico" ><a href="blogs.php"><i class="fa fa-blogs"></i> <span>Blogs</span> </a>

				  </li>
				  <li id="menu-academico" ><a href="createcountry.php"><i class="fa fa-tasks"></i> <span>countries</span> </a>

</li>
				  <li id="menu-academico" ><a href="createcollege.php"> <i class="fa fa-calendar"></i> <span>Colleges</span> </a>
					  
															  </li>
                    <li id="menu-academico" ><a href="videos.php"> <i class="fa fa-play"></i> <span>Videos</span> </a>

</li>

				   <li id="menu-academico" ><a href="article.php"><i class="fa fa-pencil"></i> <span>Article</span> </a>

				   </li>
				   <li id="menu-academico" ><a href="resources.php"><i class="fa fa-gear"></i> <span>Resources</span> </a>

</li>
<li id="menu-academico" ><a href="news.php"><i class="fa fa-tasks"></i> <span>News</span> </a>

</li>

</li>

			</ul>
		  </div>
</body>
</html>