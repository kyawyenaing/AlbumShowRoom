<!DOCTYPE html>
<html>
<head>
	<title>Albums List</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<nav id="sidebar" class="col-md-3">
			<h4>AlbumShowRoom Admin</h4>
			<ul class="list-unstyled components">
				<li class="active">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >
						ပြည်တွင်းတီးဝိုင်းများ
					</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li><a href="#">EMPERIOR</a></li>
						<li><a href="#">IRON CROSS</a></li>
						<li><a href="#">BIG BAG</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- Page Content Holder -->
		<div id="content">

		    <nav class="navbar navbar-default">
		        <div class="container-fluid">

		            <div class="navbar-header">
		                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
		                    <i class="glyphicon glyphicon-align-left"></i>
		                    <span>Toggle Sidebar</span>
		                </button>
		            </div>

		            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                <ul class="nav navbar-nav navbar-right">
		                    <li><a href="#">Page</a></li>
		                    <li><a href="#">Page</a></li>
		                    <li><a href="#">Page</a></li>
		                    <li><a href="#">Page</a></li>
		                </ul>
		            </div>
		        </div>
		    </nav>

		    <h2>Collapsible Sidebar Using Bootstrap 3</h2>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

		    $('#sidebarCollapse').on('click', function () {
		        $('#sidebar').toggleClass('active',3000);
		    });

		});
	</script>
</body>
</html>