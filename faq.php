<?php	session_start();	
include("./includes/connection.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Profile - Helping Foundation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style_form.css">
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
					<li><a href="profile.php">Profile</a></li>
					<li class="current"><a>FAQ</a></li>
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
		<h3>FAQ(s)</h3><hr>
		<?php
			$sql = "SELECT * FROM faq WHERE answer IS NOT NULL";
			$result = mysqli_query($con,$sql);
			while($rs = mysqli_fetch_array($result)){
				?>
				<div>
					<h3><?php echo $rs['question']; ?></h3>
					<p><?php echo $rs['answer']; ?></p>
				</div>
				<?php
			}
		?>
		<hr>
		<h3>Ask a Question</h3><hr>
		<form action="insert_faq.php" class="user">
			<input type="text" name="faq_que">
			<input type="submit" value="ASK">
		</form>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>