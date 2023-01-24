<!doctype html>

<html>

<head>
	<title>SafeSpace Store</title>
	<link rel="stylesheet" type="text/css" href="../css/product-styles.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
	<?php include "product-head.php"; ?>
</head>

<body onLoad="window.scroll(0, 1)">
	<div class="loader-wrapper">
		<span class="loader"><span class="loader-inner"></span></span>
	</div>
	<?php include "product-overlay.php"; ?>
	<script>
		document.body.className += ' fade-out';
		$(function() {
			$('body').removeClass('fade-out');
		});
	</script>
	<a name="top"></a>
	<a href="onclick=" topFunction() id="back-top"><img src="../images/button-top.svg" onmouseover="this.src='../images/button-top-hover.svg'" onMouseOut="this.src='../images/button-top.svg'" alt="Terug naar boven"></a>

	<div class="parallax">
		<div class="wrapper">
			<?php include "product-header.php"; ?>
			<div id="hero">
				<div id="hero-titles">
					<div class="hero-titles-center white">
						<h2 class="h2-title left"><em class="outline small"><em class="mobilehide"><a class="outline-link" href="../store">Store </a>&nbsp; / &nbsp; </em></em>Doorbell<em class="outline">.</em></h2>
					</div>
				</div>
			</div> <!-- /hero -->

			<div id="product">
				<div id="product-main">
					<div class="grid" style="margin-bottom: 250px;">
						<div id="store-grid-right" class="grid-2-col col2-right desktophide">
							<div class="grid-2-col-img pakket-image">
								<img src="../images/product-ring.png" alt="Ring">
							</div>
						</div>
						<div id="store-grid-left" class="grid-2-col col2-left">
							<div class="grid-2-col-text">
								<div id="product-title">
									<h3 class="h3-title white left">Ring</h3>
									<h3 class="h3-title white right thin">€ 69</h3>
								</div>
								<p class="p-text gray left">Bevestig de Ring naast je voordeur en leg contact met degene die voor de deur staat, altijd en overal.</p>

								<div id="hero-text-button" class="left">
									<a onclick="cart()" class="button-blue left">Bestel nu</a>
								</div>

								<script type="text/javascript">
									function cart() {
										Swal.fire({
											icon: 'error',
											title: 'Oh nee...',
											text: 'Toevoegen aan winkelmand is mislukt.',
										})
									}
								</script>

								<p class="p-text gray left">Voor 23:59 uur besteld, morgen in huis.<br>
									Product is op voorraad.</p>
							</div>
						</div>
						<div id="store-grid-right" class="grid-2-col col2-right mobilehide">
							<div class="grid-2-col-img pakket-image">
								<img src="../images/product-ring.png" alt="Ring">
							</div>
						</div>
					</div>
				</div> <!-- /product-main -->

				<div id="product-info">
					<div class="grid">
						<div id="store-grid-left" class="grid-3-col col3-left">
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Productinformatie</h3>
							</div>
						</div>
						<div id="store-grid-right" class="grid-3-col-product col3-right">
							<div class="grid-3-col-text">
								<p class="p-text gray left">Bevestig de Ring naast je voordeur en leg contact met degene die voor de deur staat,
									altijd en overal. Moet je vroeg opstaan en wil je lekker van je nachtrust kunnen
									genieten? dan kun je met de Lock een stiltetijd instellen. Dit komt ook zeer van pas als
									je in je weekend lekker wil uitslapen en geen last wilt hebben van die collectanten.
									<br><br>
									De Lock is een belangrijk onderdeel voor jouw comfort en het is een must als jij in de
									moderne tijd nog maximaal van jouw rust wilt genieten.
								</p>
							</div>
						</div>

						<br><br><br><br><br><br><br><br>

						<div id="store-grid-left" class="grid-3-col col3-left">
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Functies</h3>
							</div>
						</div>
						<div id="store-grid-right" class="grid-3-col-product col3-right">
							<div class="grid-3-col-text">
								<p class="p-text gray left">
									&bull; &nbsp; Eenvoudig te monteren in jouw deurbel <br>
									&bull; &nbsp; Gemakkelijk toe te voegen aan de SafeSpace-app <br>
									&bull; &nbsp; Notificatie wanneer er wordt aangebeld <br>
									&bull; &nbsp; Stiltetijd instellen waarmee de deurbel in de nacht geblokkeerd wordt <br>
									&bull; &nbsp; Goed te combineren met de SafeSpace Lock
								</p>
							</div>
						</div>

						<br><br><br><br><br><br><br><br>

						<div id="store-grid-left" class="grid-3-col col3-left">
							<div class="grid-3-col-name">
								<h3 class="h3-title white left">Bekijk ook</h3>
							</div>
						</div>
						<a href="lock" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
							<div id="store-grid-center" class="grid-3-col col3-center">
								<div class="grid-3-col-img product-image">
									<img src="../images/product-lock.png" alt="Lock">
								</div>
								<div class="grid-3-col-name">
									<h3 class="h3-title white left">Lock</h3>
									<h3 class="h3-title white right thin">€ 69</h3>
								</div>
								<div class="grid-3-col-text">
									<p class="p-text gray left">De Lock legt de basis van uw veilige Space. Bevestig het slot aan jouw deur, bedien het met onze app.</p>
								</div>
							</div>
						</a>
						<a href="motion" class="link" style="height:100%;width:auto;display:inline-block;margin:0;padding:0;position:relative;top:0;">
							<div id="store-grid-right" class="grid-3-col col3-right">
								<div class="grid-3-col-img product-image">
									<img src="../images/product-motion.png" alt="Motion">
								</div>
								<div class="grid-3-col-name">
									<h3 class="h3-title white left">Motion</h3>
									<h3 class="h3-title white right thin">€ 129</h3>
								</div>
								<div class="grid-3-col-text">
									<p class="p-text gray left">Met onze motion sensor ben je verzekerd van een veilige Space. Direct een melding bij beweging.</p>
								</div>
							</div>
						</a>
						<br><br><br><br><br><br><br><br>
					</div>
				</div>
			</div>
			<?php include "product-footer.php"; ?>
		</div> <!-- /wrapper -->
	</div>

	<!-- Hamburger Menu + Menu Overlay -->
	<a onclick="openNav()">
		<div id="container">
			<div class="circle"></div>
			<div class="hamburger">
				<img src="../images/icon-menu.svg" alt="Menu">
			</div>
		</div>
	</a>
</body>

</html>

<!-- Scripts-->
<script src="../js/preloader.js" type="text/javascript"></script>
<script src="../js/hamburger.js" type="text/javascript"></script>
<script src="../js/buttontop.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>