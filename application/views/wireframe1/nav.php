<header class="header bg-white">
	<div class="container px-lg-3">
		<nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
			<a class="me-auto" href="<?=base_url();?>">
				<span class="fw-bold text-uppercase text-dark font-primary h4">Sundae Bites</span>
			</a>
			<button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" href="<?=base_url();?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('/products')?>">Products</a>
					</li>
					<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
						<div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
							<a class="dropdown-item border-0 transition-link" href="<?=base_url('/about')?>">About Us</a>
							<a class="dropdown-item border-0 transition-link" href="#">Distributors</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('/testimonials');?>">Testimonials</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url('/contact');?>">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>