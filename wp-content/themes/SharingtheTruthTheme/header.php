<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sharing the Truth</title>
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/includes/assets/images/site-icon.png" type="image/png">
	<?php wp_head(); ?>
</head>

<body>
	<!-- Nav bar section  -->
	<nav class="position-relative">
		<div class="navbar navbar-expand-lg bg-transparent position-absolute w-100 z-3 top-0 py-0">
			<div class="container-fluid px-1 px-md-4 " style="background-color: rgba(0, 0, 0, 0.3);">
				<a class="navbar-brand py-1" href="/">
					<div class="d-inline-flex align-items-center">
						<img src="<?= get_template_directory_uri(); ?>/includes/assets/images/logo.png" class="logo" alt="">
						<div class="ms-3 d-none d-md-block">
							<h3 class=" mb-1 text-primary-color">Sharing The Truth</h3>
							<p class="text-xs text-gray mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon text-white"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="ms-auto navbar-nav gap-5">
						<li class="nav-item">
							<a class="nav-link px-0 text-white <?php echo is_front_page() ? 'active' : ''; ?>" aria-current="page" href="/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-0 text-white <?php echo is_page('articles') ? 'active' : ''; ?>" href="./articles">Articles</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-0 text-white <?php echo is_page('videos') ? 'active' : ''; ?>" href="./videos">Videos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-0 text-white <?php echo is_page('audios') ? 'active' : ''; ?>" href="./audios">Audios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-0 text-white <?php echo is_page('activities') ? 'active' : ''; ?>" href="./activities">Activities</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-0 text-white <?php echo is_page('about-us') ? 'active' : ''; ?>" href="./about-us">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-0 text-white <?php echo is_page('contact-us') ? 'active' : ''; ?>" href="./contact-us">Contact Us</a>
						</li>
						<!-- <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Other Channels
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="rakhine.php">Rakhine</a></li>
                                <li><a class="dropdown-item" href="#">Shan</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->

					</ul>
				</div>
			</div>
		</div>
	</nav>