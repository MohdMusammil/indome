<?php
session_start();
ob_start();
include_once'DB/db_connect.php';
$conn = OpenCon();
if(isset($_SESSION['user'])!="")
{
	header("Location: Indomed_AdminDash/Admin/adminindex.php");
}
if(isset($_POST['btn-login']))
{
	$uname = mysqli_real_escape_string($conn, $_POST['username']);
	$upass = mysqli_real_escape_string($conn, $_POST['password']);
	
	
	$res=mysqli_query($conn, "SELECT * FROM master_adminuser WHERE username='$uname'");
	$row=mysqli_fetch_array($res);

	
	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['password']== $upass)
	{
		$_SESSION['user'] = $row['id'];
		header("Location: Indomed_AdminDash/Admin/adminindex.php");
	}
	else if($count == 1 && $row['password']== $upass)
	{
		$_SESSION['user'] = $row['id'];
		header("Location: Indomed_AdminDash/Admin/adminindex.php");
	}
	else
	{
		?>
        <script>alert('Username or Password Is Wrong !');</script>
        <?php
	}
	
}
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	//echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	//echo "Cookies Not Set";
}

?>
 <html lang="zxx">

<head>
	<title>Indomed Educare Pvt Ltd</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-bg">
		<!-- title -->
		<h1> </h1> 
				<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style"><a href="index.php">
					<img src="images/logo.png" alt="" /></a>
					<p class="legend"></p>
					
				</div>
				<form action="" method="post">
					<p class="legend"> <strong>Login as Admin</strong></p>
					
					<div class="input">
						<input type="name" placeholder="User Name" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required />
						<span class="fa fa-user"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required />
						<span class="fa fa-unlock"></span>
					</div>
					<p class="re"><input type="checkbox" name="remember" /> Remember me	</p>

					<button type="submit" class="btn submit" name="btn-login">login</button>
				</form>
				<a href="index.php" class="bottom-text-w3ls">Forgot Password <span class="re">Click Here</span></a>
				<!-- <a href="aupwdreset.php" class="bottom-text-w3ls"><span class="re">Forgot Password</span></a> -->

			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->
		<div class="copyright">
			<h2>&copy; 2021 RAG_MHH. All rights reserved | Design by
				<a href="#" target="_blank">Menporul Makers</a>
			</h2>
		</div>
		<!-- //copyright -->
	</div>
</body>

</html>