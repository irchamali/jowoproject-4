<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Page Title -->
	<title>About</title>

	<!-- Page header -->
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width" />
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('theme/css/style.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('theme/css/padding-margin.css') ?>" />
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url('theme/images/' . $icon); ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>" />

</head>

<body class="content-animate">

	<!-- PRELOADER
		==================================================-->
	<div class="page-loader">
		<div class="loader-area"></div>
		<div class="loader font-face1">loading...
		</div>
	</div>

	<!-- PAGE
		==================================================-->
	<div id="top" class="page">

		<!-- Navigation panel
			================================================== -->
		<?php echo $header; ?>
		<!-- End Navigation panel -->

		<!-- Main Content
			==================================================-->
		<main class="cd-main-content mt-100">



			<!-- SECTION ABOUT
				================================================== 	-->
			<section class="page-section small-section">
				<div class="shadow-title shadow-gray unselectable parallax-1">Ambalan</div>
				<div class="container relative">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 mb-10 mb-sm-40 text-center">
							<h2 class="font-face1 section-heading fw800 mt-0 text-center">Ambalan Dinding</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-1">
							<!-- SECTION BLOG ITEM
								================================================== -->
							<!-- <div class="blog-item clearfix">
								<img src="<?php echo base_url() . 'theme/images/' . $about_img; ?>">
							</div>
							<br><br>
						</div> -->

							<div class="col-md-6">
								<!-- SECTION BLOG ITEM
								================================================== -->
								<!-- <div class="blog-item clearfix">
									<?php echo $about_desc; ?>
								</div> -->
							</div>
						</div>
					</div>
			</section>

			<!-- Seksi baru ini -->
			<section class="teams" id="teams">
				<div class="max-width">
					<h2 class="title">Ambalan Dinding</h2>
					<p class="text-center">Ada <s>PROMO</s></p>
					<div class="split">
						<?php foreach ($testimonial->result() as $test) : ?>
							<div class="featured__item">
								<img src="<?php echo base_url() . 'assets/images/' . $test->testimonial_image; ?>" class="img" alt="" />
								<p class="featured__details"><span class="price"><?php echo $test->testimonial_name; ?></span><?php echo $test->testimonial_content; ?></p>
							</div>
							<!-- <div class="featured__item">
                        <img src="<?= base_url() . 'theme/images/' . $about_img; ?>" alt="" class="featured__img">
                        <p class="featured__details"><span class="price">Rp. 200K</span>product name</p>
                    </div>
                    <div class="featured__item">
                        <img src="<?= base_url() . 'theme/images/' . $about_img; ?>" alt="" class="featured__img">
                        <p class="featured__details"><span class="price">Rp. 300K</span>product name</p>
                    </div>
                    <div class="featured__item">
                        <img src="<?= base_url() . 'theme/images/' . $about_img; ?>" alt="" class="featured__img">
                        <p class="featured__details"><span class="price">Rp. 400K</span>product name</p>
                    </div> -->
						<?php endforeach; ?>
					</div>
				</div><br>
				<div class="max-width">
					<article class="product shoe-red spacing">
						<img src="<?= base_url() . 'theme/images/' . $bg_1; ?>" alt="" class="product__image">
						<h3 class="product__title"><?= $name_1; ?></h3>
						<p class="product__description"><?php echo $about_desc; ?></p>
						<a href="<?= base_url('/product'); ?>" class="btn">Order now</a>
					</article>
					<article class="product shoe-white shoe-left spacing">
						<img src="<?= base_url() . 'theme/images/' . $bg_2; ?>" alt="" class="product__image">
						<h3 class="product__title"><?= $name_2; ?></h3>
						<p class="product__description"><?= $caption_2; ?></p>
						<a href="<?= base_url('/product'); ?>" class="btn">Order now</a>
					</article>
					<article class="product shoe-blue spacing">
						<img src="<?= base_url() . 'theme/images/' . $bg_3; ?>" alt="" class="product__image">
						<h3 class="product__title"><?= $name_3; ?></h3>
						<p class="product__description"><?= $caption_3; ?></p>
						<a href="<?= base_url('/product'); ?>" class="btn">Order now</a>
					</article>
				</div>
			</section>

			<!-- SECTION TESTIMONIAL
				================================================== -->
			<section id="testimonial" class="page-section black-section medium-section overlay-light-alpha-90" data-background="<?php echo base_url() . 'theme/images/' . $bg_testimoni; ?>">
				<div class="container relative">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="block-wraper">
								<!-- Swiper -->
								<!-- Add Pagination -->

								<div class="slick-container testimonial-slider">
									<?php foreach ($testimonial->result() as $test) : ?>
										<div class="slick-item">
											<div class="testimonial-item text-center">
												<blockquote class="testimonial-text font-face1 mb-0 fw300">
													<div class="card-avatar">
														<a href="javascript:void(0)">
															<img src="<?php echo base_url() . 'assets/images/' . $test->testimonial_image; ?>" class="img" alt="" />
														</a>
													</div>
													<p>
														<?php echo $test->testimonial_content; ?>
													</p>
													<footer class="testimonial-author font-face1 fw700">
														<?php echo $test->testimonial_name; ?>
														<div class="testimonial-rating mt-10 mb-10">&starf; &starf; &starf; &starf; &starf;</div>
													</footer>
												</blockquote>
											</div>
										</div>
									<?php endforeach; ?>

								</div>

							</div>
						</div>
					</div>

				</div>
				<div class="slider-navigation-bottom">
					<div class="testimonial-right"></div>
				</div>
				<div class="slider-navigation-top">
					<div class="testimonial-left"></div>
				</div>
			</section><br><br>

			<!-- SECTION SUBSCRIBE
				================================================== -->
			<!-- <section class="page-section subscribe-section small-section">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="form-subscribe mb-50 mb-sm-0">
								<div class="col-sm-6 mb-sm-40">
									<h2 class="heading6 mt-0 font-face1 white-color fw700 mb-0">Ingin Mengenal kami lebih dekat?</h2>
									<button class="btn bg-white font-face1 white-color fw700 mb-0"><a href="https://api.whatsapp.com/send?phone=+6285730110225&text=Hello%20kak,%20Saya%20sudah%20mengecek%20produk%20Anda%20dan%20Saya%20Tertarik%20untuk.."><i class="fa fa-whatsapp white-color"></i> (085730110225)</a></button>
								</div>
								<div class="col-sm-6">
									<form class="form-inline" action="<?php echo site_url('subscribe'); ?>" method="post">
										<div class="form-group">
											<input type="hidden" name="url" value="<?php echo site_url('about'); ?>" required>
											<input type="email" name="email" required placeholder="Your Email..." class="form-control">
											<button type="submit" class="btn btn-subscribe bg-white">Subscribe</button>
										</div>
									</form>
								</div>
							</div>
							<div><?php echo $this->session->flashdata('message'); ?></div>
						</div>
					</div>
				</div>
			</section>

			<hr class="nomargin nopadding" /> -->

			<!-- FOOTER
				================================================== -->
			<?php echo $footer; ?>

		</main>

	</div>

	<!-- Modal Search-->
	<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<form action="<?php echo site_url('search'); ?>" method="GET">
						<div class="input-group">
							<input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
							</span>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JAVASCRIPT
		==================================================-->
	<script src="<?php echo base_url('theme/js/jquery-2.2.4.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.easing.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/waypoints.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.scrollTo.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.localScroll.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.viewport.mini.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.sticky.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.fitvids.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.parallax-1.1.3.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/isotope.pkgd.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/imagesloaded.pkgd.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/masonry.pkgd.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jquery.counterup.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/slick.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/wow.min.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/script.js') ?>"></script>
	<script src="<?php echo base_url('theme/js/jssocials.min.js') ?>"></script>

</body>

</html>