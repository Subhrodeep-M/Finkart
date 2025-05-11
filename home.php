<?php
session_start();

if (isset($_SESSION['email'])) {
	$auth = true;
} else {
	$auth = false;
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<title>FinKart</title>
	<link rel="stylesheet" href="/style.css">
</head>

<body>
	<div id="main">
		<div id="home">
			<div id="homemain">
				<div id="cover-image">
					<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1df9cdff31a536ab5da53407ba7f1a6fa092577502e7026fc27bd2ce9e0cd2dd?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="">
				</div>
				<nav class="nav-container">
					<div class="brand-logo">FinKart</div>
					<div class="nav-menu">
						<div class="nav-items">

							<?php if ($auth) : ?>
								<a href="homepage.php">
									<button class="login-btn">Dashboard (<?php echo $_SESSION['email']; ?>)</button>
								</a>
							<?php else : ?>
								<a href="login2.php">
									<button class="login-btn">Login</button>
								</a>
							<?php endif; ?>


							<?php if ($auth) : ?>
								<form action="logout.php" method="post">
									<button type="submit" name="logout" class="member-btn">Logout</button>
								</form>
							<?php else : ?>
								<a href="regpage.php" class="member-bton">
									<button class="member-btn">
										<span>Become a member</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-narrow-right">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<path d="M5 12l14 0" />
											<path d="M15 16l4 -4" />
											<path d="M15 8l4 4" />
										</svg>
									</button>
								</a>
							<?php endif; ?>


						</div>
					</div>
				</nav>
				<div class="home-content">
					<div class="home-text-container">
						<h1 class="home-title">We Ensure A Best Insurance Service</h1>
						<p class="home-subtitle">
							Discover our tailored investment solutions designed to help you achieve your financial goals.
						</p>
						<a href="#pricing-heading">
							<button class="cta-button">Get Insure Now</button>
						</a>
					</div>
					<div class="features-grid">
						<div class="feature-card">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/494d5d02b5e9e901df7ec27b5463349ea4bd66ca329c95cf800f6e28df9356d9?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="Peace of Mind Icon" class="feature-icon" />
							<h3 class="feature-title">Peace of Mind</h3>
							<p class="feature-description">
								Enjoy life's moments, knowing<br />you're covered every step of the way.
							</p>
						</div>
						<div class="feature-card">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/983f19ad299db9e95d0ee9cc666381eb6b94ed1b5e9c82c4fb3321b20bcc9af7?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="Set For Life Icon" class="feature-icon" />
							<h3 class="feature-title">Set For Life</h3>
							<p class="feature-description">
								Protection that lasts, security<br />that stays with you.
							</p>
						</div>
						<div class="feature-card feature-card--highlighted">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fc94cbd056a144d902d68e31615de0e5cd91873d46707e050506d9f9e04239d1?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="Satisfaction Icon" class="feature-icon" />
							<h3 class="feature-title">100% Satisfaction</h3>
							<p class="feature-description">
								Your peace, our promise – complete satisfaction guaranteed
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="why-choose-section" role="region" aria-labelledby="why-choose-title">
		<div class="section-container">
			<h2 id="why-choose-title" class="section-title">Why Choose Finkart ?</h2>
			<div class="features-grid2">
				<article class="feature-card2">
					<img
						loading="lazy"
						src="https://cdn.builder.io/api/v1/image/assets/TEMP/94ed955557f197271726ba0fac8849ab8e2fd0e8957923f1a27a6cfe1d703c1b?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c"
						class="feature-icon2"
						alt="Personalized Support Icon"
						width="72"
						height="72" />
					<div class="card-text2">
						<h3 class="feature-title2">Personalized Support</h3>
						<p class="feature-description2">
							Our solutions are tailored to fit your needs,
							at every step of the way
						</p>
					</div>
				</article>

				<article class="feature-card2">
					<img
						loading="lazy"
						src="https://cdn.builder.io/api/v1/image/assets/TEMP/8501deeeffef0cc5fcd45e8253fc6677f252fcf6fd85360882d1c0496ec51d47?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c"
						class="feature-icon2"
						alt="Lifetime Assurance Icon"
						width="72"
						height="72" />
					<div class="card-text2">
						<h3 class="feature-title2">Lifetime Assurance</h3>
						<p class="feature-description">
							It's our coverage that grows with you,
							giving you lasting protection
							and peace of mind.
						</p>
					</div>
				</article>

				<article class="feature-card2">
					<img
						loading="lazy"
						src="https://cdn.builder.io/api/v1/image/assets/TEMP/11d7f0c22fa3bb99db657fd1cfa08fec6c552240e581fff4b1ff99aee39d3196?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c"
						class="feature-icon2"
						alt="Trusted Partnership Icon"
						width="72"
						height="72" />
					<div class="card-text2">
						<h3 class="feature-title2">Trusted Partnership</h3>
						<p class="feature-description2">
							Our commitment to your satisfaction means
							we're with you today, tomorrow, and always.
						</p>
					</div>
				</article>
			</div>
		</div>
	</section>
	</div>
	<section class="testimonials-container" aria-label="Customer Testimonials">
		<div class="content-wrapper3">
			<div class="header-section3">
				<div class="header-content3">
					<h2 class="section-title3">Incredible Stories from Incredible People</h2>
					<p class="section-subtitle3">Real experiences that showcase the impact we make every day.</p>
				</div>
			</div>
		</div>

		<div class="testimonials-grid">
			<article class="testimonial-card">
				<div class="card-content3">
					<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c4155dc391bf4aad5c81654010740ac843646e31426742b55c9d3fa711da85a3?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="Customer profile photo" class="profile-image" />
					<div class="testimonial-text-wrapper">
						<p class="testimonial-text">
							"FinKart made finding the perfect home insurance a breeze. Now I have peace of mind knowing my home and family are secure."
						</p>
						<div class="rating-stars" role="img" aria-label="5 out of 5 star rating">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/efbf5e00e4c86c1620765209719ae872d42d1c8950264c87b56a859ed3616885?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/39e38d7d60b1088d7117653d208ab0a731ee68acbda5c6ebc1e855108e87e829?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f0c35a0fb2af958c1a62cf467bfe412a0ac681e5842eba340fcee65cbf6b3d82?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbe0a19afdecaab60d5de46f7dffa3e5ee6d0e9057fa7322dc5977400fe13ebc?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/793c327b7793b2f7e336964207fb9036d9ff2f9c992b89898315fd3f795e946c?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
						</div>
					</div>
				</div>
			</article>

			<article class="testimonial-card">
				<div class="card-content3">
					<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e494a63a6fd2d453c027f2afdec9b73f990ce163db4ba0b3bbcc306c185c25b1?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="Customer profile photo" class="profile-image" />
					<div class="testimonial-text-wrapper">
						<p class="testimonial-text">
							"FinKart helped me plan for my family's future with ease. The insurance options were perfect and I'm happy with Finkart and their services"
						</p>
						<div class="rating-stars" role="img" aria-label="5 out of 5 star rating">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a297547a7a451cd2d12307eda9a97b2b56967e9991cf387e08a2a66699595682?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3657cdf6ab6edc880fca80de0573781168cad1aecdd018bfa14a8fa26895a62d?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d781923ddfe85509d9460f3b3354d2a165467ee959a73eacadb2cd42ee7dcd0d?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f1e9f2e92a5b52cb7f64d6181dc281426790939148f3f03669d64455f01aa3ff?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/793c327b7793b2f7e336964207fb9036d9ff2f9c992b89898315fd3f795e946c?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
						</div>
					</div>
				</div>
			</article>

			<article class="testimonial-card">
				<div class="card-content3">
					<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d2aa51000b6161e45f4fdcd57aa2f77fa0817988645cbfa45d25f943db0ea8a2?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="Customer profile photo" class="profile-image" />
					<div class="testimonial-text-wrapper">
						<p class="testimonial-text">
							"As a new driver, FinKart guided me to the best car insurance for my budget. Now I drive with confidence. Thanks to Finkart"
						</p>
						<div class="rating-stars" role="img" aria-label="5 out of 5 star rating">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a297547a7a451cd2d12307eda9a97b2b56967e9991cf387e08a2a66699595682?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3657cdf6ab6edc880fca80de0573781168cad1aecdd018bfa14a8fa26895a62d?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d781923ddfe85509d9460f3b3354d2a165467ee959a73eacadb2cd42ee7dcd0d?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f1e9f2e92a5b52cb7f64d6181dc281426790939148f3f03669d64455f01aa3ff?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/793c327b7793b2f7e336964207fb9036d9ff2f9c992b89898315fd3f795e946c?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
						</div>
					</div>
				</div>
			</article>

			<article class="testimonial-card">
				<div class="card-content3">
					<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fba339ea6b3090a2c9fabf6d96111f0df75545c930ddd514c40f6220d09b743a?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="Customer profile photo" class="profile-image" />
					<div class="testimonial-text-wrapper">
						<p class="testimonial-text">
							"FinKart made finding the perfect home insurance a breeze. Now I have peace of mind knowing my home and family are secure."
						</p>
						<div class="rating-stars" role="img" aria-label="5 out of 5 star rating">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a297547a7a451cd2d12307eda9a97b2b56967e9991cf387e08a2a66699595682?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3657cdf6ab6edc880fca80de0573781168cad1aecdd018bfa14a8fa26895a62d?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d781923ddfe85509d9460f3b3354d2a165467ee959a73eacadb2cd42ee7dcd0d?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f1e9f2e92a5b52cb7f64d6181dc281426790939148f3f03669d64455f01aa3ff?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/793c327b7793b2f7e336964207fb9036d9ff2f9c992b89898315fd3f795e946c?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
						</div>
					</div>
				</div>
			</article>

			<article class="testimonial-card">
				<div class="card-content3">
					<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/303983af3b1ab521d70f93401d8e67679645af8b3324cbb8f19380df2c729148?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="Customer profile photo" class="profile-image" />
					<div class="testimonial-text-wrapper">
						<p class="testimonial-text">
							"FinKart helped me plan for my family's future with ease. The insurance options were perfect. Recommended for everyone."
						</p>
						<div class="rating-stars" role="img" aria-label="5 out of 5 star rating">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a297547a7a451cd2d12307eda9a97b2b56967e9991cf387e08a2a66699595682?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3657cdf6ab6edc880fca80de0573781168cad1aecdd018bfa14a8fa26895a62d?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d781923ddfe85509d9460f3b3354d2a165467ee959a73eacadb2cd42ee7dcd0d?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f1e9f2e92a5b52cb7f64d6181dc281426790939148f3f03669d64455f01aa3ff?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/793c327b7793b2f7e336964207fb9036d9ff2f9c992b89898315fd3f795e946c?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="star-icon" />
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>
	<section class="pricing-section" aria-labelledby="pricing-heading">
		<h2 id="pricing-heading" class="pricing-title">Pricing</h2>
		<p class="pricing-subtitle">Our Insurance Policies, now both affordable and reasonable</p>

		<div class="pricing-container">
			<div class="pricing-wrapper">
				<article class="pricing-card">
					<h3 class="card-title">Life Insurance</h3>
					<p class="card-description">Secure your life and stay healthy</p>

					<div class="price-container">
						<span class="price-amount">1599</span>
						<div class="price-details">
							<span class="currency">₹</span>
							<span class="price-period">Per Year</span>
						</div>
					</div>

					<ul class="features-list">
						<li class="feature-item">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3a293e13d219382838ed2e5154c4c112dbc1939dfed45b94cda4e3c8bb170a5e?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="feature-icon" />
							<span class="feature-text">Agent Assistance</span>
						</li>
						<li class="feature-item">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6e592b7c6f670ccb229b976cc90d819287ea5773c05fbc0f6c1953eb07e764e1?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="feature-icon" />
							<span class="feature-text">24x7 Technical Assistance</span>
						</li>
						<li class="feature-item">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8fd94f234235c2909190820dc25f81d8889a2955ce40c8adbeb7afb0220d36f4?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="feature-icon" />
							<span class="feature-text">Unlimited Email Updates</span>
						</li>
						<li class="feature-item">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d64ae992946bbd4bfbcf9c44f7a7d0bc3826db77c60fdc4d46117a98e436cc62?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="feature-icon" />
							<span class="feature-text">eKYC support</span>
						</li>
					</ul>
					<a href="life.html">
						<button class="cta-button">Check It Out</button>
					</a>
				</article>

				<article class="pricing-card">
					<h3 class="card-title">Health Insurance</h3>
					<p class="card-description">Healthy life leads to a happy life</p>

					<div class="price-container">
						<span class="price-amount">1799</span>
						<div class="price-details">
							<span class="currency">₹</span>
							<span class="price-period">Per Year</span>
						</div>
					</div>

					<ul class="features-list">
						<li class="feature-item">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/daf6ba8a2459b887e40023b36843bbd1121dae851955ecb29b8a817de61505bb?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="feature-icon" />
							<span class="feature-text">Agent Assistance</span>
						</li>
						<li class="feature-item">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9997cb3a5dd5f551c65b631889c288df114909ab73b8b70aeb70e01e8fcb2ff6?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="feature-icon" />
							<span class="feature-text">24x7 Technical Assistance</span>
						</li>
						<li class="feature-item">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/23e100b5dda32a3a8ae02ade667fc53e89827f06e9594258a4477f9ddad52f7a?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="feature-icon" />
							<span class="feature-text">Unlimited Email Updates</span>
						</li>
						<li class="feature-item">
							<img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ab3850ef3aa10af96d8ab6f1d42b9963e80be09a1bbf312b8d0a3286f6d28301?placeholderIfAbsent=true&apiKey=21831d0dc5b64031ab1db4e9b0bf646c" alt="" class="feature-icon" />
							<span class="feature-text">eKYC support</span>
						</li>
					</ul>
					<a href="health.html">
						<button class="cta-button">Check it Out</button>
					</a>
				</article>
			</div>
		</div>
	</section>
	<section class="insurance-footer">
		<div class="header-section">
			<div class="brand-container">
				<div class="logo-wrapper">
					<div class="logo-content">
						<div class="logo-column">
							<img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2ae0500c11bce9e1b8689a03fefd4f3d1e403452fd3001704a747b8db5d5b3a8?apiKey=a5fc1ccd64e54a31816e3f02696da736&" alt="FinKart Insurance Logo" class="logo-image" />
						</div>
						<div class="brand-column">
							<h1 class="brand-name">FinKart</h1>
						</div>
					</div>
				</div>
				<div class="tagline-row">
					<p class="tagline">An Insurance Agency For You</p>
				</div>
			</div>
		</div>

		<footer class="footer-content">
			<div class="footer-main">
				<div class="footer-links">
					<div class="links-container">
						<div class="links-grid">
							<div class="link-column">
								<h2 class="column-heading">Company Info</h2>
								<nav class="link-list" aria-label="Company Information">
									<a href="#about">About Us</a>
									<a href="#career" class="link">Carrier</a>
									<a href="#hiring" class="link">We are hiring</a>
									<a href="#blog" class="link">Blog</a>
								</nav>
							</div>

							<div class="link-column">
								<h2 class="column-heading">Legal</h2>
								<nav class="link-list" aria-label="Legal Information">
									<a href="#terms">Terms & Conditions</a>
									<a href="#rules" class="link">Rules & Regulations</a>
									<a href="#agent" class="link">Agent Policy</a>
									<a href="#member" class="link">Member Policy</a>
								</nav>
							</div>

							<div class="link-column">
								<h2 class="column-heading">Features</h2>
								<nav class="link-list" aria-label="Features">
									<a href="#insurance">Insurance</a>
									<a href="#member-analytics" class="link">Member Analytics</a>
									<a href="#agent-analytics" class="link">Agent Analytics</a>
									<a href="#support" class="link">Technical Support</a>
								</nav>
							</div>

							<div class="link-column">
								<h2 class="column-heading">Resources</h2>
								<nav class="link-list" aria-label="Resources">
									<a href="#mobile">IOS & Android</a>
									<a href="#demo" class="link">Watch a Demo</a>
									<a href="#customers" class="link">Customers</a>
									<a href="#api" class="link">API</a>
								</nav>
							</div>

							<div class="contact-column">
								<h2 class="column-heading">Get In Touch</h2>
								<div class="contact-info">
									<div class="contact-item">
										<img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/521cb6cf91dd920bcf4c1e5d2abdf9b620c0f28e99147a08d56d8bd48179491f?apiKey=a5fc1ccd64e54a31816e3f02696da736&" alt="Phone Icon" class="contact-icon" />
										<span class="contact-text">+91 98640-340XX</span>
									</div>
									<div class="contact-item">
										<img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/138e8c7ae3ce641fe5c4dd70891896dd23b8dfe0679d9d3a60c8bc4e51ed9bb8?apiKey=a5fc1ccd64e54a31816e3f02696da736&" alt="Location Icon" class="contact-icon" />
										<span class="contact-text">Santipur, Guwahati, Assam 781009</span>
									</div>
									<div class="contact-item">
										<img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5ae4e278bc608178076d5dd52b507919ddc58a9b6491d50125d4805fa8f3f546?apiKey=a5fc1ccd64e54a31816e3f02696da736&" alt="Email Icon" class="contact-icon" />
										<span class="contact-text">contact@finkart.com</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="bottom-container">
						<div class="bottom-content">
							<p class="copyright">FinKart Insure All Right Reserved</p>
							<div class="social-links">
								<a href="#facebook" aria-label="Visit our Facebook page">
									<img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/79492d4a1bfe1ae57764eef06b867ae855fee362ca3263095b12cedef0f8ad35?apiKey=a5fc1ccd64e54a31816e3f02696da736&" alt="" class="social-icon" />
								</a>
								<a href="#instagram" aria-label="Visit our Instagram page">
									<img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/33181563b6818e609612324b91aacd5004a85cf777db047595e0bb3f8c7d0d66?apiKey=a5fc1ccd64e54a31816e3f02696da736&" alt="" class="social-icon" />
								</a>
								<a href="#twitter" aria-label="Visit our Twitter page">
									<img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7b77657915659a2a5aa522a9a22bd7c799309939864f824a59c352c32f0e0b84?apiKey=a5fc1ccd64e54a31816e3f02696da736&" alt="" class="social-icon" />
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</section>
	</div>
</body>

</html>