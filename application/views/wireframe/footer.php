				<footer class="text-black" style=" background: rgb(255,196,198); background: linear-gradient(90deg, rgba(255,196,198,1) 0%, rgba(250,171,176,1) 100%); ">
					<div class="container py-4">
						<div class="row py-5">
							<div class="col-md-3 mb-3 mb-md-0">
								<h6 class="text-uppercase mb-3">Company</h6>
								<ul class="list-unstyled mb-0">
									<li><a class="footer-link text-brown" href="<?=base_url('/our-stories');?>">Our Story</a></li>
									<li><a class="footer-link text-brown" href="<?=base_url('products')?>">Available Products</a></li>
									<li><a class="footer-link text-brown" href="<?=base_url('faqs')?>">FAQs</a></li>
									<li><a class="footer-link text-brown" href="<?=base_url('/contact-us');?>">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-md-3 mb-3 mb-md-0">
								<h6 class="text-uppercase mb-3">Social media</h6>
								<ul class="list-unstyled mb-0">
									<li><a class="footer-link text-brown" href="https://www.facebook.com/sundaebitesph/"><i class="fab me-2 mb-2 fa-fw fa-facebook-f"></i> Facebook</a></li>
									<li><a class="footer-link text-brown" href="https://instagram.com/sundaebites_philippines"><i class="fab me-2 mb-2 fa-fw fa-instagram"></i> Instagram</a></li>
									<li><a class="footer-link text-brown" href="https://vt.tiktok.com/ZSdTCRr6D/"><i class="fab me-2 mb-2 fa-fw fa-tiktok"></i> Tiktok</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<img class="img-fluid footer-logo" src="<?=base_url('/public/img/sb/sblogo-white-sm.png')?>" alt="sundae bites logo">
							</div>
						</div>
					</div>
				</footer>

				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
				
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
				<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			</div>
	</body>
</html>