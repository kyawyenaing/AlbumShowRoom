<?php
  include("configs/authenticate.php");
  include("configs/connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Albums List</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" type="icon/image" href="../assets/images/logo.jpg">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<?php 
					include('partials/header.php');
				?>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table_form table-hover table-bordered">
							<thead>
								<tr>
									<th>Band Name</th>
									<th>Remark</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?
								$result = mysqli_query($conn,"SELECT * FROM albums");
								while($row = mysqli_fetch_assoc($result)):;
									?>
									<tr>
										<td><? echo $row['name'];?></td>
										<td><? echo $row['remark'];?></td>
									</tr>
								<?endwhile;?>
							</tbody>
						</table>
						<span class="">
							<a href="create_album.php">
								<button class="btn btn-primary">ADD NEW ALBUM</button>
							</a>
						</span>
					</div>
				</div>
				<div class="panel-footer">
					 © 2018. All right reserved. 
				</div>
			</div>
		</div>
	</div>
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>