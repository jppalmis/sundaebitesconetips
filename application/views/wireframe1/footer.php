				<footer class="text-black" style=" background: rgb(255,196,198); background: linear-gradient(90deg, rgba(255,196,198,1) 0%, rgba(250,171,176,1) 100%); ">
					<div class="container py-4">
						<div class="row py-5">
							<div class="col-md-3 mb-3 mb-md-0">
								<h6 class="text-uppercase mb-3">Customer services</h6>
								<ul class="list-unstyled mb-0">
									<li><a class="footer-link text-brown" href="">Help &amp; Contact Us</a></li>
									<li><a class="footer-link text-brown" href="">Returns &amp; Refunds</a></li>
									<li><a class="footer-link text-brown" href="">Find Stores</a></li>
									<li><a class="footer-link text-brown" href="">Terms &amp; Conditions</a></li>
								</ul>
							</div>
							<div class="col-md-3 mb-3 mb-md-0">
								<h6 class="text-uppercase mb-3">Company</h6>
								<ul class="list-unstyled mb-0">
									<li><a class="footer-link text-brown" href="">What We Do</a></li>
									<li><a class="footer-link text-brown" href="">Available Products</a></li>
									<li><a class="footer-link text-brown" href="">Distributors</a></li>
									<li><a class="footer-link text-brown" href="">FAQs</a></li>
								</ul>
							</div>
							<div class="col-md-3 mb-3 mb-md-0">
								<h6 class="text-uppercase mb-3">Social media</h6>
								<ul class="list-unstyled mb-0">
									<li><a class="footer-link text-brown" href=""><i class="fab me-2 mb-2 fa-fw fa-facebook-f"></i> Facebook</a></li>
									<li><a class="footer-link text-brown" href=""><i class="fab me-2 mb-2 fa-fw fa-twitter"></i> Twitter</a></li>
									<li><a class="footer-link text-brown" href=""><i class="fab me-2 mb-2 fa-fw fa-instagram"></i> Instagram</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<img class="img-responsive footer-logo" src="<?=base_url('/public/img/sb/sblogo-white-sm.png')?>" alt="sundae bites logo">
							</div>
						</div>
					</div>
				</footer>
				
				<script src="<?=base_url('/public/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
				<script src="<?=base_url('/public/vendor/glightbox/js/glightbox.min.js')?>"></script>
				<script src="<?=base_url('/public/vendor/nouislider/nouislider.min.js')?>"></script>
				<script src="<?=base_url('/public/vendor/swiper/swiper-bundle.min.js')?>"></script>
				<script src="<?=base_url('/public/vendor/choices.js/public/assets/scripts/choices.min.js')?>"></script>
				<script src="<?=base_url('/public/js/front.js')?>"></script>
				<script>
					function injectSvgSprite(path) {
					
						var ajax = new XMLHttpRequest();
						ajax.open("GET", path, true);
						ajax.send();
						ajax.onload = function(e) {
						var div = document.createElement("div");
						div.className = 'd-none';
						div.innerHTML = ajax.responseText;
						document.body.insertBefore(div, document.body.childNodes[0]);
						}
					}

					injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
					
				</script>
				<link text-brown rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
				<script>
					AOS.init();
				</script>

			</div>
	</body>
</html>