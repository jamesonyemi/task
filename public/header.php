<?php 
include '../../_config.php'; 
include BASE_URL.'public/config.php';  
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Task Management</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="../../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#" class="simple-text">
				Task Management
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="<?= 'index.php' ?>">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?= 'user.php' ?>">
	                        <i class="material-icons">person</i>
	                        <p>Assign Task</p>
	                    </a>
	                </li>
	                <li>
	                   <!--  <a href="table.html">
	                        <i class="material-icons">content_paste</i>
	                        <p>Table List</p>
	                    </a> -->
	                </li>
	                <li>
	                    <!-- <a href="typography.html">
	                        <i class="material-icons">library_books</i>
	                        <p>Typography</p>
	                    </a> -->
	                </li>
	                <li>
	                    <!-- <a href="icons.html">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Icons</p>
	                    </a> -->
	                </li>
	                <li>
	                    <a href="<?= 'map.php' ?>">
	                        <i class="material-icons">location_on</i>
	                        <p>Maps</p>
	                    </a>
	                </li>
	                <li>
	                   <!--  <a href="notifications.html">
	                        <i class="material-icons text-gray">notifications</i>
	                        <p>Notifications</p>
	                    </a> -->
	                </li>
					<li class="active-pro">
	                    <!-- <a href="upgrade.html">
	                        <i class="material-icons">unarchive</i>
	                        <p>Upgrade to PRO</p>
	                    </a> -->
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Dashboard</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
		 						</a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>
			</nav>