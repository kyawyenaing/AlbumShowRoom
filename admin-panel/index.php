<?php 
session_start();
?>
<!DOCTYPE html>
<!-- <html><head> -->
	<title>Admin Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Welcome to Admin-Panel</h4>
				</div>
				<div class="panel-body">	
					<form class="form-horizontal col-md-offset-2 col-md-10" action="login.php" method="POST">
						<? if(isset($_SESSION['message'])):?>
							<div class="col-md-offset-2">
								<strong class="text-danger">
									<?php echo $_SESSION['message'] ; 
										session_destroy();
									?>
								</strong>
							</div>
						<? endif;?>
						<div class="form-group">
							<div class="col-md-2">
								<label for="name" class="control-label text-center">Name</label>
							</div>
							<div class="col-md-3 input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" name="name" class="form-control">
							</div>
							<? if(isset($_GET["username"]) && $_GET['username']=="wrong_name"):?>
								<div class="col-md-offset-2">
									<strong class="text-success">
										Username is wrong!
									</strong>
								</div>
							<? endif;?>
						</div>
						<div class="form-group">
							<div class="col-md-2">
								<label for="password" class="control-label text-center">Password</label>
							</div>
							<div class="col-md-3 input-group">
								<span class="input-group-addon">
									<i class="fa fa-unlock-alt"></i>
								</span>
								<input type="password" name="password" class="form-control">
							</div>
							<?if(isset($_GET['password']) && $_GET['password'] == "wrong_password"):?>
							<div class="col-md-3 col-md-offset-2 text-center">
								<strong class="text-danger">
									<? echo "Password is Wrong!";?>
								</strong>
							</div>
							<?endif;?>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-2">
								<button class="btn btn-success btn-lg">Login</button>
							</div>
						</div>
					</form>
				</div>
				<div class="panel-footer">
					© 2018. All right reserved.
				</div>
			</div>
		</div>
	</div>
</body></html>