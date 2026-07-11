
<?php
	$seo = [
		'title' => 'Contact Divaine Tech | Get In Touch For IT Solutions & Services',
		'description' => 'Contact Divaine Tech for web development, software solutions, IT services, and digital transformation solutions. Our team is ready to help your business grow.',
		'keywords' => 'Contact Divaine Tech, IT service contact, web development company contact, software development inquiry, technology solutions',
		'author' => 'Divaine Tech'
	];
	include_once ('elements/header.php')
?> 

	<!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3">Contact Us</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">contact us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Contact Information Section Start -->
	<div class="contact-information">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<!-- Contact Item Start -->
					<div class="contact-item wow fadeInUp" data-wow-delay="0.25s">
						<div class="contact-content">
							<div class="contact-content-title">
								<h2>address</h2>
								<a href="#"><img src="assets/images/icon-location.svg" alt=""></a>
							</div>
							<a href="javascript:void();" class="fs-5" style="color:var(--text-color);">123, Lorem Ipsum, Street no, City, Country 123456</a>                            
						</div>
						<div class="contact-image">
							<figure class="image-anime">
								<img src="assets/images/contact-info-1.jpg" alt="">
							</figure>
						</div>
					</div>
					<!-- Contact Item End -->
				</div>

				<div class="col-md-4">
					<!-- Contact Item Start -->
					<div class="contact-item wow fadeInUp" data-wow-delay="0.5s">
						<div class="contact-content">
							<div class="contact-content-title">
								<h2>call now</h2>
								<a href="+971 9895898589"><img src="assets/images/icon-phone.svg" alt=""></a>
							</div>
							<a href="tel:hello@divainetech.io" class="fs-5" style="color:var(--text-color);">+971 9995598959</a> 
						</div>
						<div class="contact-image">
							<figure class="image-anime">
								<img src="assets/images/contact-info-2.jpg" alt="">
							</figure>
						</div>
					</div>
					<!-- Contact Item End -->
				</div>

				<div class="col-md-4">
					<!-- Contact Item Start -->
					<div class="contact-item wow fadeInUp" data-wow-delay="0.75s">
						<div class="contact-content">
							<div class="contact-content-title">
								<h2>email us</h2>
								<a href="mailto:hello@divainetech.io"><img src="assets/images/icon-mail.svg" alt=""></a>
							</div>
							<a href="mailto:hello@divainetech.io" class="fs-5" style="color:var(--text-color);">hello@divainetech.io</a>                             
						</div>
						<div class="contact-image">
							<figure class="image-anime">
								<img src="assets/images/contact-info-3.jpg" alt="">
							</figure>
						</div>
					</div>
					<!-- Contact Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Information Section End -->

	<!-- Contact Us Section Start -->
	<div class="contact-us">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- Contact Details Section Start -->
					<div class="contact-details">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">contact us</h3>
							<h2 class="text-anime-style-3">Get in touch with us today</h2>
						</div>
						<!-- Section Title End -->

						<!-- Contact Details Body Start -->
						<div class="contact-detail-body">
							<p class="wow fadeInUp" data-wow-delay="0.25s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore et.</p>
							<h3 class="wow fadeInUp" data-wow-delay="0.5s">follow us:</h3>
							<ul class="wow fadeInUp" data-wow-delay="0.75s">
								<li><a href="javascript:void();" target="_blank"><i class="fa-brands fa-telegram"></i></a></li>
								<li><a href="https://www.instagram.com/divaine_tech/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
								<li><a href="javascript:void();" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
								<!-- <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li> -->
							</ul>
						</div>
						<!-- Contact Details Body End -->
					</div>
					<!-- Contact Details Section End -->
				</div>

				<div class="col-lg-6">
					<div class="contact-form-box wow fadeInUp" data-wow-delay="0.5s">
						<!-- Contact Form Start -->
						<div class="contact-form">
							<form action="send-mail.php" method="POST" data-toggle="validator">
								<div class="row">
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Contact Number" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="email" name ="email" class="form-control" id="email" placeholder="email" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-4">
										<input type="text" name="subject" class="form-control" id="subject" placeholder="subjects" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-4">
										<textarea name="msg" class="form-control" id="msg" rows="7" placeholder="message" required></textarea>
										<div class="help-block with-errors"></div>
									</div>

									<div class="col-md-12">
										<button type="submit" class="btn-default">send a message</button>
										<div id="msgSubmit" class="h3 text-left hidden"></div>
									</div>
								</div>
							</form>
						</div>
						<!-- Contact Form End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Us Section End -->
	
	<!-- Google Map Section Start -->
	<div class="google-map wow fadeInUp" data-wow-delay="0.25s">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56481.31329163797!2d-82.30112043759952!3d27.776444959332093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sUnited%20States%20solar!5e0!3m2!1sen!2sin!4v1706008331370!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- Google Map Section End -->

<?php
	include_once ('elements/footer.php')
?>