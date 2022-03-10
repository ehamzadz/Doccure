<!DOCTYPE html> 
<html lang="en">
	
<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 19:28:27 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
		
		<link rel="stylesheet" href="assets/plugins/dropzone/dropzone.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
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
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="main.php" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="main.php" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu">
								<a href="#">Home <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="main.php">Home</a></li>
									<li><a href="index-1.php">Home 1</a></li>
									<li><a href="index-2.php">Home 2</a></li>
									<li><a href="index-3.php">Home slider 1</a></li>
									<li><a href="index-slide.php">Home slider 2</a></li>
								</ul>
							</li>
							<li class="has-submenu active">
								<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="doctor-dashboard.php">Doctor Dashboard</a></li>
									<li><a href="appointments.php">Appointments</a></li>
									<li><a href="schedule-timings.php">Schedule Timing</a></li>
									<li><a href="my-patients.php">Patients List</a></li>
									<li><a href="patient-profile.php">Patients Profile</a></li>
									<li><a href="chat-doctor.php">Chat</a></li>
									<li><a href="invoices.php">Invoices</a></li>
									<li class="active"><a href="doctor-profile-settings.php">Profile Settings</a></li>
									<li><a href="reviews.php">Reviews</a></li>
									<li><a href="doctor-register.php">Doctor Register</a></li>
									<li class="has-submenu">
										<a href="doctor-blog.php">Blog</a>
										<ul class="submenu">
											<li><a href="doctor-blog.php">Blog</a></li>
											<li><a href="blog-details.php">Blog view</a></li>
											<li><a href="doctor-add-blog.php">Add Blog</a></li>
										</ul>
									</li>
								</ul>
							</li>	
							<li class="has-submenu">
								<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li class="has-submenu">
										<a href="#">Doctors</a>
										<ul class="submenu">
											<li><a href="map-grid.php">Map Grid</a></li>
											<li><a href="map-list.php">Map List</a></li>
										</ul>
									</li>
									<li><a href="search.php">Search Doctor</a></li>
									<li><a href="doctor-profile.php">Doctor Profile</a></li>
									<li><a href="booking.php">Booking</a></li>
									<li><a href="checkout.php">Checkout</a></li>
									<li><a href="booking-success.php">Booking Success</a></li>
									<li><a href="patient-dashboard.php">Patient Dashboard</a></li>
									<li><a href="favourites.php">Favourites</a></li>
									<li><a href="chat.php">Chat</a></li>
									<li><a href="profile-settings.php">Profile Settings</a></li>
									<li><a href="change-password.php">Change Password</a></li>
								</ul>
							</li>	
							<li class="has-submenu">
								<a href="#">Pharmacy <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="pharmacy-index.php">Pharmacy</a></li>
									<li><a href="pharmacy-details.php">Pharmacy Details</a></li>
									<li><a href="pharmacy-search.php">Pharmacy Search</a></li>
									<li><a href="product-all.php">Product</a></li>
									<li><a href="product-description.php">Product Description</a></li>
									<li><a href="cart.php">Cart</a></li>
									<li><a href="product-checkout.php">Product Checkout</a></li>
									<li><a href="payment-success.php">Payment Success</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="voice-call.php">Voice Call</a></li>
									<li><a href="video-call.php">Video Call</a></li>
									<li><a href="search.php">Search Doctors</a></li>
									<li><a href="calendar.php">Calendar</a></li>
									<li><a href="components.php">Components</a></li>
									<li class="has-submenu">
										<a href="invoices.php">Invoices</a>
										<ul class="submenu">
											<li><a href="invoices.php">Invoices</a></li>
											<li><a href="invoice-view.php">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="blank-page.php">Starter Page</a></li>
									<li><a href="login.php">Login</a></li>
									<li><a href="register.php">Register</a></li>
									<li><a href="forgot-password.php">Forgot Password</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="blog-list.php">Blog List</a></li>
									<li><a href="blog-grid.php">Blog Grid</a></li>
									<li><a href="blog-details.php">Blog Details</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#" target="_blank">Admin <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="admin/index.php" target="_blank">Admin</a></li>
									<li><a href="pharmacy/index.php" target="_blank">Pharmacy Admin</a></li>
								</ul>
							</li>
							<li class="login-link">
								<a href="patient-dashboard.php">
									<div class="user-header">
										<div class="avatar avatar-sm">
											<img src="<?php echo IMAGE ?>" alt="User Image" class="avatar-img rounded-circle">
										</div>
										<div class="user-text">
											<h6><?php echo FNAME.' '.LNAME ?></h6>
											<p class="text-muted mb-0"><?php echo USERTYPE; ?></p>
										</div>
									</div>
								</a>
							</li>
						</ul>		 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header">+213 6 61 75 11 50</p>
							</div>
						</li>
						
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="<?php echo IMAGE ?>" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="<?php echo IMAGE ?>" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6><?php echo FNAME.' '.LNAME ?></h6>
										<p class="text-muted mb-0"><?php echo USERTYPE; ?></p>
									</div>
								</div>
								<a class="dropdown-item" href="patient-dashboard.php">Dashboard</a>
								<a class="dropdown-item" href="patient-profile-settings.php">Profile Settings</a>
								<a class="dropdown-item" href="logout.php">Logout</a>
							</div>
						</li>
						<!-- /User Menu -->
						
						
					</ul>
				</nav>
			</header>
			<!-- /Header -->
