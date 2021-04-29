<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Profile - Helping Foundation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="event.php">Events</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
					<li class="current"><a>Profile</a></li>
					<li><a href="faq.php">FAQ</a></li>
					<li class="log_btn"><a href="logout.php">Logout</a></li>
				<?php 
					}
					else{
				?>
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="gallery">
			<div class="header">
				<div>
					<h2></h2>
					<p>
					</p>
				</div>
				<img src="" height="250px" width="500px">
			</div>
			<div class="body">
				<div>
					<h2></h2>
				</div>
				<div>
					<h2></h2>
					<p>
					</p>
				</div>
				<div>
					<h2></h2>
					<p>
					</p>
				</div>
			</div>
			<div class="footer">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. In magna nibh, vulputate in aliq uet in, tristique quis ligula. Fusce augue mi, aliquet ac fermentum egestas, semper a nisl. Ut diam lorem, aliquet sed dapibus a, laoreet in velit.
				</p>
				<a href="login.php">Get Involved</a>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>