<?php	include("./includes/session_check.php");
include("./includes/connection.php");	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/logo_icon.png" />
	<title>Admin Panel - Helping Foundation</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
	<script src="./js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#event_state").change(function(){
				var state = $("#event_state").val();
				$("#event_city").load("getCity.php?state="+state);
			});
			$("select#new_state").change(function(){
				if($("select#new_state").val() =="Add new State"){
					$("input#new_state").css("display","block");
				}
				else{
					$("input#new_state").css("display","none");
				}
			});
		});
	</script>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="../images/logo.png" alt="logo"></a>
			<ul>
				<li><a href="home.php">Donations</a></li>
				<li><a href="upload_media.php">Upload Media</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="events.php">Events</a></li>
				<li class="current"><a href="ngo_activities.php">NGO Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="admin_manages">
			<h3>Add state/city</h3><hr>
			<form action="insert_location.php" method="post" enctype="multipart/form-data" class="user">
			<label>Select or add state</label>
			<select id="new_state" name="new_state">
				<option value="">Select State</option>
				<option value="Add new State" id="add_new_state" style="font-size:2em;">Add new State</option>
				<?php
					$sql = "SELECT * FROM state";
					$result = mysqli_query($con,$sql);
					while($rs = mysqli_fetch_array($result)){
						?>
						<option value="<?php echo $rs["state_id"]; ?>"><?php echo $rs["state_name"]; ?></option>
						<?php
					}
				?>
			</select>
			<input type="text" id="new_state" name="new_state" style="display:none;">
			<label>City</label>
			<input type="text" id="new_city" name="new_city">
			
			<input type='submit' value='Add'>
			</form>
			<div class="stored">
				<h4>Available State/city</h4><hr>
				<form class="user">
				<label>state</label>
				<select id="event_state" name="event_state">
					<option value="">Select State</option>
					<?php
						$sql = "SELECT * FROM state";
						$result = mysqli_query($con,$sql);
						while($rs = mysqli_fetch_array($result)){
							?>
							<option value="<?php echo $rs["state_id"]; ?>"><?php echo $rs["state_name"]; ?></option>
							<?php
						}
					?>
				</select>
				<label>city</label>
				<select id="event_city" name="event_city">
					<option value="">Select State First</option>
				</select>
				</form>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>