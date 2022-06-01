<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
<div class="clearfix">
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		
		<div class="col-md-10">
			
			<form class="form-inline" method="POST" >
				<div class="input-group col-md-12">
					<input type="text" class="form-control" placeholder="Search for a game..." name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
					<span class="input-group-btn">
						<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</form>
			<br />
			<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<h2>Result</h2>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "et";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
		$query = mysqli_query($conn, "SELECT * FROM `game` WHERE `name` LIKE '%$keyword%'") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<p><?php echo substr($fetch['name'], 0, 100)?>...</p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>
		</div>
	</div>
	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_content.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					
					
				</div>
			</form>
		</div>
	</div>
    </div>
</body>
</html>