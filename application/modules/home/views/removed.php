<!-- <div id="second-fold">
	<div class="second-fold-container">
		<div id="sbCarousel" class="carousel slide carousel-fade" data-bs-ride="">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#sbCarousel" id="1" data-bs-slide-to="0" class="active"></button>
				<button type="button" data-bs-target="#sbCarousel" id="2" data-bs-slide-to="1"></button>
				<button type="button" data-bs-target="#sbCarousel" id="3" data-bs-slide-to="2"></button>
				<button type="button" data-bs-target="#sbCarousel" id="4" data-bs-slide-to="3"></button>
				<button type="button" data-bs-target="#sbCarousel" id="5" data-bs-slide-to="4"></button>
				<button type="button" data-bs-target="#sbCarousel" id="6" data-bs-slide-to="5"></button>
				<button type="button" data-bs-target="#sbCarousel" id="7" data-bs-slide-to="6"></button>
				<button type="button" data-bs-target="#sbCarousel" id="8" data-bs-slide-to="7"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item d-flex justify-content-center active">
					<div class="row">
						<div class="sb-flavor-title">
							<h2 class="text-center strawberry">Strawberry</h2>
						</div>
						<div class="sb-flavor-img">
							<img src="<?=base_url('public/images/f2/strawberry.webp')?>" class="img-responsive" alt="strawberry">
						</div>
					</div>
				</div>
				<div class="carousel-item d-flex justify-content-center">
					<div class="row">
						<div class="sb-flavor-title">
							<h2 class="text-center dark-choco">Dark Chocolate</h2>
						</div>
						<div class="sb-flavor-img">
							<img src="<?=base_url('public/images/f2/darkchocolate.webp')?>" class="img-responsive" alt="dark chocolate">
						</div>
					</div>
				</div>
				<div class="carousel-item d-flex justify-content-center">
					<div class="row">
						<div class="sb-flavor-title">
							<h2 class="text-center espresso">Espresso</h2>
						</div>
						<div class="sb-flavor-img">
							<img src="<?=base_url('public/images/f2/espresso.webp')?>" class="img-responsive" alt="espresso">
						</div>
					</div>
				</div>
				<div class="carousel-item d-flex justify-content-center">
					<div class="row">
						<div class="sb-flavor-title">
							<h2 class="text-center krunchy">Krunchy</h2>
						</div>
						<div class="sb-flavor-img">
							<img src="<?=base_url('public/images/f2/krunchy.webp')?>" class="img-responsive" alt="krunchy">
						</div>
					</div>
				</div>
				<div class="carousel-item d-flex justify-content-center">
					<div class="row">
						<div class="sb-flavor-title">
							<h2 class="text-center matcha">Matcha Cookies</h2>
						</div>
						<div class="sb-flavor-img">
							<img src="<?=base_url('public/images/f2/matcha.webp')?>" class="img-responsive" alt="matcha cookies">
						</div>
					</div>
				</div>
				<div class="carousel-item d-flex justify-content-center">
					<div class="row">
						<div class="sb-flavor-title">
							<h2 class="text-center milk-choco">Milk Chocolate</h2>
						</div>
						<div class="sb-flavor-img">
							<img src="<?=base_url('public/images/f2/milkchocolate.webp')?>" class="img-responsive" alt="milk chocolate">
						</div>
					</div>
				</div>
				<div class="carousel-item d-flex justify-content-center">
					<div class="row">
						<div class="sb-flavor-title">
							<h2 class="text-center cookies-cream">Cookies and Cream</h2>
						</div>
						<div class="sb-flavor-img">
							<img src="<?=base_url('public/images/f2/cookiesandcream.webp')?>" class="img-responsive" alt="cookies and cream">
						</div>
					</div>
				</div>
				<div class="carousel-item d-flex justify-content-center">
					<div class="row">
						<div class="sb-flavor-title">
							<h2 class="text-center white-choco">White Chocolate</h2>
						</div>
						<div class="sb-flavor-img">
							<img src="<?=base_url('public/images/f2/whitechocolate.webp')?>" class="img-responsive" alt="white chocolate">
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div> -->

<!-- <script>
	$('#1').click(function(){
		$('#second-fold').css('background','white');
		$('#second-fold').append('<style>#second-fold::before{content:"";position:absolute;bottom:100%;left:0;z-index:10;width:100%;height:142px;margin-bottom:-1px;background-image:url(https://sundaebitesconetip.com/public/images/wave.png);background-position:100% center;background-repeat:repeat-x;background-size:2286px 142px}</style>');
	})
	$('#2').click(function(){
		$('#second-fold').css('background','#707070');
		$('#second-fold').append('<style>#second-fold::before{content:"";position:absolute;bottom:100%;left:0;z-index:10;width:100%;height:142px;margin-bottom:-1px;background-image:url(https://sundaebitesconetip.com/public/images/wave2.png);background-position:100% center;background-repeat:repeat-x;background-size:2286px 142px}</style>');
	})
	$('#3').click(function(){
		$('#second-fold').css('background','#af7aff');
		$('#second-fold').append('<style>#second-fold::before{content:"";position:absolute;bottom:100%;left:0;z-index:10;width:100%;height:142px;margin-bottom:-1px;background-image:url(https://sundaebitesconetip.com/public/images/wave3.png);background-position:100% center;background-repeat:repeat-x;background-size:2286px 142px}</style>');
	})
	$('#4').click(function(){
		$('#second-fold').css('background','#ccffb3');
		$('#second-fold').append('<style>#second-fold::before{content:"";position:absolute;bottom:100%;left:0;z-index:10;width:100%;height:142px;margin-bottom:-1px;background-image:url(https://sundaebitesconetip.com/public/images/wave4.png);background-position:100% center;background-repeat:repeat-x;background-size:2286px 142px}</style>');
	})
	$('#5').click(function(){
		$('#second-fold').css('background','#d37d7d');
		$('#second-fold').append('<style>#second-fold::before{content:"";position:absolute;bottom:100%;left:0;z-index:10;width:100%;height:142px;margin-bottom:-1px;background-image:url(https://sundaebitesconetip.com/public/images/wave5.png);background-position:100% center;background-repeat:repeat-x;background-size:2286px 142px}</style>');
	})
	$('#6').click(function(){
		$('#second-fold').css('background','#feffa5');
		$('#second-fold').append('<style>#second-fold::before{content:"";position:absolute;bottom:100%;left:0;z-index:10;width:100%;height:142px;margin-bottom:-1px;background-image:url(https://sundaebitesconetip.com/public/images/wave6.png);background-position:100% center;background-repeat:repeat-x;background-size:2286px 142px}</style>');
	})
	$('#7').click(function(){
		$('#second-fold').css('background','#ffbea5');
		$('#second-fold').append('<style>#second-fold::before{content:"";position:absolute;bottom:100%;left:0;z-index:10;width:100%;height:142px;margin-bottom:-1px;background-image:url(https://sundaebitesconetip.com/public/images/wave7.png);background-position:100% center;background-repeat:repeat-x;background-size:2286px 142px}</style>');
	})
	$('#8').click(function(){
		$('#second-fold').css('background','#99f5f4');
		$('#second-fold').append('<style>#second-fold::before{content:"";position:absolute;bottom:100%;left:0;z-index:10;width:100%;height:142px;margin-bottom:-1px;background-image:url(https://sundaebitesconetip.com/public/images/wave8.png);background-position:100% center;background-repeat:repeat-x;background-size:2286px 142px}</style>');
	})
</script> -->


<!-- <style>
	    #ff6 .row2-container {
        display: flex;
        justify-content: center;
    }
    
    #ff6 .row1-container-inner,
    #ff6 .row2-container-inner{
        background-image: url("../images/f6/excerpt_bg.webp");
        background-repeat: no-repeat;
        background-size: contain;
        height: 23.438vw;
        display: flex;
        justify-content: center;
        align-items: center;
        background-position: center;
    }
    #ff6 .row1-container-inner h2,
    #ff6 .row2-container-inner h2{
        font-family: 'Cooper Black';
        color: #ffb3cd;
        font-size: 2.5vw;
        padding: 0vw 0vw 0vw 0vw;
        margin-top: 0;
        margin-bottom: revert;
        font-weight: 900;
        line-height: 1.2;
    }
    
    #ff6 .row2-container {
        display: flex;
        justify-content: center;
    }
    
    #ff6 .row1-container-inner.col1 {
        position: relative;
        left: -7vw;
        top: 5vw;
    }
    
    #ff6 .row1-container-inner.col2 {
        position: relative;
        top: -7vw;
        left: -10vw;
    }
    
    #ff6 .row2-container-inner.col3 {
        position: relative;
        top: 5vw;
        left: -1vw;
    }
    
    #ff6 .row2-container-inner.col4 {
        position: relative;
        top: -5vw;
        left: -5vw;
        padding-top: unset;
    }
    #ff6 .row2-container-inner.col4 h2 {
        text-align: center;
        line-height: 2.2vw;
    }
    #ff6 .row1-container img {
        position: relative;
        left: 13vw;
    }
</style>

<style>
	#ff6{
        background-color: #e1dfd7;
        padding: 1vw 0vw 7vw 0vw;
    }
    
    #ff6 .row2-container {
        display: flex;
        justify-content: center;
    }
    
    #ff6 .row1-container-inner,
    #ff6 .row2-container-inner{
        background-image: url("../images/f6/excerpt_bg.webp");
        background-repeat: no-repeat;
        background-size: contain;
        height: 23.438vw;
        display: flex;
        justify-content: center;
        align-items: center;
        background-position: center;
    }
    #ff6 .row1-container-inner h2,
    #ff6 .row2-container-inner h2{
        font-family: 'Cooper Black';
        color: #ffb3cd;
        font-size: 2.5vw;
        padding: 0vw 0vw 0vw 0vw;
        margin-top: 0;
        margin-bottom: revert;
        font-weight: 900;
        line-height: 1.2;
    }
    
    #ff6 .row2-container {
        display: flex;
        justify-content: center;
    }
    
    #ff6 .row1-container-inner.col1 {
        position: relative;
        left: -7vw;
        top: 5vw;
    }
    
    #ff6 .row1-container-inner.col2 {
        position: relative;
        top: -7vw;
        left: -10vw;
    }
    
    #ff6 .row2-container-inner.col3 {
        position: relative;
        top: 5vw;
        left: -1vw;
    }
    
    #ff6 .row2-container-inner.col4 {
        position: relative;
        top: -5vw;
        left: -5vw;
        padding-top: unset;
    }
    #ff6 .row2-container-inner.col4 h2 {
        text-align: center;
        line-height: 2.2vw;
    }
    #ff6 .row1-container img {
        position: relative;
        left: 13vw;
    }
</style> -->