<?php
	if (isset($_SESSION["USERNAME"]) ){
			$loginOrProfile = '<li class="nav-item dropdown has-arrow logged-item">
										<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
											<span class="user-img">
												<img class="rounded-circle" src="../'.IMAGE.'" width="31" alt="Darren Elder">
											</span>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<div class="user-header">
												<div class="avatar avatar-sm">
													<img src="../'.IMAGE .'" alt="User Image" class="avatar-img rounded-circle">
												</div>
												<div class="user-text">
													<h6>'.FNAME.' '.LNAME .'</h6>
													<p class="text-muted mb-0">'.USERTYPE.'</p>
												</div>
											</div>
											<a class="dropdown-item" href="../doctor-dashboard.php">Dashboard</a>
											<a class="dropdown-item" href="../doctor-profile-settings.php">Profile Settings</a>
											<a class="dropdown-item" href="../logout.php">Logout</a>
										</div>
									</li>';
		}else{
			$loginOrProfile = '<li class="nav-item">
										<a class="nav-link header-login" href="../patient-login.php">login / Signup </a>
									</li>';
	}
	if (isset($_SESSION["USERNAME"]) ){
		$loginOrProfile2 = '<li class="login-link">
										<a href="doctor-dashboard.php">
											<div class="user-header">
												<div class="avatar avatar-sm">
													<img src="../'.IMAGE .'" alt="User Image" class="avatar-img rounded-circle">
												</div>
												<div class="user-text">
													<h6>.'.FNAME.' '.LNAME .'</h6>
													<p class="text-muted mb-0">'.USERTYPE.'</p>
												</div>
											</div>
										</a>
									</li>';
	}else{
		$loginOrProfile2 = '<li class="login-link">
									<a href="../patient-login.php">Login / Signup</a>
								</li>';
}

?>

<!DOCTYPE html> 
<html lang="en">	
<!-- Mirrored from doccure-html.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 19:27:44 GMT -->
	<head>		
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>AvisMednet</title>		
		<!-- Favicons -->
		<link type="image/x-icon" href="../assets/img/favicon.png" rel="icon">		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">		
		<!-- Main CSS -->
		<link rel="stylesheet" href="../assets/css/style.css">		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">						
						<a href="main.php" class="navbar-brand logo">
							<img src="../assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>							 
					<ul class="nav header-navbar-rht">						
						<?php echo $loginOrProfile; ?>
					</ul>
				</nav>
			</header>
			<!-- /Header -->