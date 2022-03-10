<?php
	require_once('serverFiles/config.php');
	require_once('serverFiles/db.php');
	require_once('serverFiles/user_data.php');	
	
	$sql = mysqli_query($conn, "SELECT * FROM doctors where registered=1");
	$DoctorWidget='';
	if (mysqli_num_rows($sql) > 0) {
		foreach( $sql as $row ){
			
			$IMG = "assets/img/doctors/".$row["image"];	

			$usr = $row["username"];

			$sql2 = mysqli_query($conn, "SELECT COUNT(*) FROM reviews WHERE doctorUsername = '$usr' ");
			if (mysqli_num_rows($sql2) > 0) {
                $row2 = mysqli_fetch_assoc($sql2);
				$count = $row2['COUNT(*)'];
				$sql3 = mysqli_query($conn, "SELECT SUM(stars) FROM reviews WHERE doctorUsername = '$usr' ");
				$row3 = mysqli_fetch_assoc($sql3);
				$sum = $row3['SUM(stars)'];
			}
			
			$stars ='';
			if ($sum != 0){				
				$n = $sum / $count;
				$n = round($n);

				for ($i = 1; $i <= $n; $i++) {
					$stars .= '<i class="fas fa-star filled"></i>';
				}

				$n = 5- $n;
				for ($i = 1; $i <= $n; $i++) {
					$stars .= '<i class="fas fa-star"></i>';
				}
			} else {
				$stars = '<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>';
			}

			

			$DoctorWidget = $DoctorWidget.'<div class="profile-widget">
								<div class="doc-img">
									<a href="doctor-profile.html">
										<img class="img-fluid" alt="User Image" src="'.$IMG.'">
									</a>
									<a href="javascript:void(0)" class="fav-btn">
										<i class="far fa-bookmark"></i>
									</a>
								</div>
								<div class="pro-content">
									<h3 class="title">
										<a href="doctor-profile.html">'.$row["fname"].' '.$row["lname"].'</a> 
										<i class="fas fa-check-circle verified"></i>
									</h3>
									<p class="speciality">'.$row['speciality'].'</p>
									<div class="rating">'.$stars.'
										<span class="d-inline-block average-rating">('.$count.')</span>
									</div>
									<ul class="available-info">
										<li>
											<i class="fas fa-map-marker-alt"></i> '.$row["city"].', '.$row["country"].'
										</li>
										<li>
											<i class="far fa-clock"></i> Available on Fri, 22 Mar
										</li>
										<li>
											<i class="far fa-money-bill-alt"></i> '.$row["pricing"].' DA
											<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
										</li>
									</ul>
									<div class="row row-sm">
										<div class="col-6">
											<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
										</div>
										<div class="col-6">
											<a href="booking.html" class="btn book-btn">Book Now</a>
										</div>
									</div>
								</div>
							</div>';
		}
	}
	




	// Header 
	require ('header.php');
?>

			
			<!-- Home Banner -->
			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h5>SOLUTION COMPLÈTE DE SOINS DE SANTÉ</h5>
							<h1>Je Recherche Ma Maladie</h1>
							<p>La pandémie de Covid-19 a changé le système de santé au monde pour la prévention des épidémies la télémédecine.</p>
						</div>
                         
						<!-- Search -->
						<div class="search-box">
							<form action="https://doccure-html.dreamguystech.com/template/search.html">
								<div class="form-group search-location">
									<input type="text" class="form-control" placeholder="Search Location">
									<span class="form-text">Basé sur votre emplacement</span>
								</div>
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
									<span class="form-text">Ex : examen dentaire ou de sucre, etc.</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn mt-0"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
						</div>
						<!-- /Search -->
						
					</div>
				</div>
			</section>
			<!-- /Home Banner -->

			<section class="section home-tile-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-9 m-auto">
							<div class="section-header text-center">
								<h2>Qu'est-ce que tu cherches?</h2>
							</div>
							<div class="row">
								<div class="col-lg-4 mb-3">
									<div class="card text-center doctor-book-card">
										<img src="assets/img/doctors/doctor-07.jpg" alt="" class="img-fluid">
										<div class="doctor-book-card-content tile-card-content-1">
											<div>
												<h3 class="card-title mb-0">Consulter un médecin</h3>
												<a href="search.html" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Reserve maintenant</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 mb-3">
									<div class="card text-center doctor-book-card">
										<img src="assets/img/img-pharmacy1.jpg" alt="" class="img-fluid">
										<div class="doctor-book-card-content tile-card-content-1">
											<div>
												<h3 class="card-title mb-0">Trouver une pharmacie</h3>
												<a href="pharmacy-search.html" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">Trouve maintenant</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 mb-3">
									<div class="card text-center doctor-book-card">
										<img src="assets/img/lab-image.jpg" alt="" class="img-fluid">
										<div class="doctor-book-card-content tile-card-content-1">
											<div>
											<h3 class="card-title mb-0">Trouver un laboratoire</h3>
												<a href="javascript:void(0);" class="btn book-btn1 px-3 py-2 mt-3" tabindex="0">À venir</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			  
			<!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Clinique et spécialités</h2>
						<p class="sub-title">Pour permettre une prise en charge à la hauteur de vos attentes en matière de confort et de technicités des soins prodigués, la clinique vous offre des soins spécialisés de qualité au sein de notre établissement pluridisciplinaire convivial et chaleureux.
Ci dessous nos différentes spécialités médicales et chirurgicales :</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">
							
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-01.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Urologie</p>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-02.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Neurologie</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-03.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Orthopédique</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-04.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Cardiologue</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Dentiste</p>
								</div>							
								<!-- /Slider Item -->
								
							</div>
							<!-- /Slider -->
							
						</div>
					</div>
				</div>   
			</section>	 
			<!-- Clinic and Specialities -->
		  
			<!-- Popular Section -->
			<section class="section section-doctor">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-lg-4">
							<div class="section-header ">
								<h2>Réservez notre médecin</h2>
								<p>Lorem Ipsum is simply dummy text </p>
							</div>
							<div class="about-content">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
								<p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes</p>					
								<a href="javascript:;">Read More..</a>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="doctor-slider slider">
							
								<?php echo $DoctorWidget; ?>
								<!-- Doctor Widget -->
								
								<!-- /Doctor Widget -->								
							</div>
						</div>
				   </div>
				</div>
			</section>
			<!-- /Popular Section -->
		   
		   <!-- Availabe Features -->
		   <section class="section section-features">
				<div class="container-fluid">
				   <div class="row">
						<div class="col-md-5 features-img">
							<img src="assets/img/features/feature.png" class="img-fluid" alt="Feature">
						</div>
						<div class="col-md-7">
							<div class="section-header">	
								<h2 class="mt-2">Fonctionnalités disponibles dans notre clinique</h2>
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
							</div>	
							<div class="features-slider slider">
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/feature-01.jpg" class="img-fluid" alt="Feature">
									<p>Service des patients</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/feature-02.jpg" class="img-fluid" alt="Feature">
									<p>Salle d'essai</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/feature-03.jpg" class="img-fluid" alt="Feature">
									<p>Soins intensifs</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/feature-04.jpg" class="img-fluid" alt="Feature">
									<p>Laboratoire</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/feature-05.jpg" class="img-fluid" alt="Feature">
									<p>Opération</p>
								</div>
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="feature-item text-center">
									<img src="assets/img/features/feature-06.jpg" class="img-fluid" alt="Feature">
									<p>Médicale</p>
								</div>
								<!-- /Slider Item -->
							</div>
						</div>
				   </div>
				</div>
			</section>		
			<!-- /Availabe Features -->
			
			<!-- Blog Section -->
		   <section class="section section-blogs">
				<div class="container-fluid">
				
					<!-- Section Header -->
					<div class="section-header text-center">
						<h2>Blogues et actualités</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<!-- /Section Header -->
					
					<div class="row blog-grid-row">
						<div class="col-md-6 col-lg-3 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-thumb-01.jpg" alt="Post Author"> <span>Dr. Ruby Perrin</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 4 Dec 2019</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">Doccure – Making your clinic painless visit?</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-lg-3 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-thumb-02.jpg" alt="Post Author"> <span>Dr. Darren Elder</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 3 Dec 2019</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">What are the benefits of Online Doctor Booking?</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-lg-3 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-03.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-thumb-03.jpg" alt="Post Author"> <span>Dr. Deborah Angel</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 3 Dec 2019</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">Benefits of consulting with an Online Doctor</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
						<div class="col-md-6 col-lg-3 col-sm-12">
						
							<!-- Blog Post -->
							<div class="blog grid-blog">
								<div class="blog-image">
									<a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-04.jpg" alt="Post Image"></a>
								</div>
								<div class="blog-content">
									<ul class="entry-meta meta-item">
										<li>
											<div class="post-author">
												<a href="doctor-profile.html"><img src="assets/img/doctors/doctor-thumb-04.jpg" alt="Post Author"> <span>Dr. Sofia Brient</span></a>
											</div>
										</li>
										<li><i class="far fa-clock"></i> 2 Dec 2019</li>
									</ul>
									<h3 class="blog-title"><a href="blog-details.html">5 Great reasons to use an Online Doctor</a></h3>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
								</div>
							</div>
							<!-- /Blog Post -->
							
						</div>
					</div>
					<div class="view-all text-center"> 
						<a href="blog-list.html" class="btn btn-primary">View All</a>
					</div>
				</div>
			</section>
			<!-- /Blog Section -->			
			

            <!-- footer -->
			<?php
				require ('footer.php');
			?>
			<!-- /footer -->
			
		   
	   </div>
	   <!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 19:28:08 GMT -->
</html>