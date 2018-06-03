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
</head>
<body>
	<div id="app">
	    <nav class="navbar navbar-default navbar-static-top">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
	                    <span class="sr-only">Toggle Navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="{{ url('/') }}">
	                    Brand
	                </a>
	            </div>

	            <div class="collapse navbar-collapse" id="app-navbar-collapse">
	                <!-- Left Side Of Navbar -->
	                <ul class="nav navbar-nav">
	                	<li class="text-center">
	                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expended="false" role="button">Bands
	                	<span class="caret"></span></a>
	                	<ul class="list-unstyled  dropdown-menu" role="menu">
	                		<li><a href="">Local Bands</a></li>
	                		<li><a href="">Foreign Bands</a></li>
	                	</ul>
	                	</li>
	                </ul>
	                <!-- Right Side Of Navbar -->
	                <ul class="nav navbar-nav navbar-right">
	                    <!-- Authentication Links -->
                    	<li><a href="#">Hello</a></li>
                    	<li><a href="#">Hello</a></li>
                    	<li><a href="#">Hello</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Admin <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
	                </ul>
	            </div>
	        </div>
	    </nav>
	</div>
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					
				</div>
				<div class="panel-body"></div>
			</div>
		</div>
	</div>
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>