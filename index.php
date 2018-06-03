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
		<nav id="sidebar" class="col-md-3 active">
				<h4>AlbumShowRoom</h4>
			<ul class="list-unstyled components">
				<li class="">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
						ပြည်တွင်းတီးဝိုင်းများ <span class="caret"></span>
					</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li><a href="#">EMPERIOR</a></li>
						<li><a href="#">IRON CROSS</a></li>
						<li><a href="#">BIG BAG</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="content">
		    <nav class="navbar navbar-default">
		        <div class="container-fluid">
		            <div class="navbar-header">
		                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
		                    <span>Show Menu</span>
		                </button>
		            </div>
		        </div>
		    </nav>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud .</p>
		</div>
	</div><!-- end of wrapper-->
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