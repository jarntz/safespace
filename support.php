<!doctype html>

<head>
	<title>SafeSpace Support</title>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
	<?php
	include "head.php";
	?>
	<link rel="stylesheet" type="text/css" href="css/support-styles.css">
</head>

<body onLoad="window.scroll(0, 1)">
	<div class="loader-wrapper">
		<span class="loader"><span class="loader-inner"></span></span>
	</div>
	<?php include "overlay.php"; ?>
	<script>
		document.body.className += ' fade-out';
		$(function() {
			$('body').removeClass('fade-out');
		});
	</script>

	<a name="top"></a>
	<a href="onclick=" topFunction() id="back-top"><img src="images/button-top.svg" onmouseover="this.src='images/button-top-hover.svg'" onMouseOut="this.src='images/button-top.svg'" alt="Terug naar boven"></a>

	<div class="parallax">
		<div class="wrapper">
			<?php include "header.php"; ?>

			<div id="hero">
				<div id="hero-titles">
					<div class="hero-titles-center white">
						<h2 class="h2-title left"><em class="outline">How can we </em>help<em class="outline">?</em></h2>
					</div>
				</div>
			</div> <!-- /hero -->

			<div id="support">
				<div id="support-form">
					<input id="filter" type="text" placeholder="Typ hier om te zoeken">
				</div>

				<div class="grid">
					<a href="tour" target="_blank">
						<div id="results">
							<div id="results" class="results" alt="installatie">
								<img class="support-icon" src="images/icon-support-installatie.svg" alt="installatie">
								<h3 class="support-cat h3-title left white">Installatie</h3>
								<p class="support-explain p-text left gray">
									&bull; &nbsp; Problemen met de installatie van een product of pakket.<br>
									&bull; &nbsp; Geen zin om zelf te installeren? Wij doen het graag voor je!<br>
									&bull; &nbsp; Incomplete levering of onjuist geleverde items.
								</p>
							</div>
						</div>
					</a>

					<a href="tour" target="_blank">
						<div id="results">
							<div id="results" class="results">
								<img class="support-icon" src="images/icon-support-software.svg">
								<h3 class="support-cat h3-title left white">Software</h3>
								<p class="support-explain p-text left gray">
									&bull; &nbsp; Tips omn alles uit onze systemen te halen.<br>
									&bull; &nbsp; Hulp bij het gebruik van onze software.<br>
									&bull; &nbsp; Snel aan de slag met onze diensten, wij bieden de juiste hulp waar nodig!<br>
								</p>
							</div>
						</div>
					</a>

					<a onclick="supportdownload1(); setTimeout(supportdownload2, 3000);">
						<div id="results">
							<div id="results" class="results">
								<img class="support-icon" src="images/icon-support-producten.svg">
								<h3 class="support-cat h3-title left white">Producten</h3>
								<p class="support-explain p-text left gray">
									&bull; &nbsp; Hulp bij het selecteren van de door jou gewenste producten.<br>
									&bull; &nbsp; Advies op maat. Wij weten wat jouw Space nodig heeft, en bieden hulp op locatie.<br>
									&bull; &nbsp; Een product retourneren of ruilen? Wij helpen je graag!<br>
								</p>
							</div>
						</div>
					</a>

					<a onclick="supportdownload1(); setTimeout(supportdownload2, 3000);">
						<div id="results">
							<div id="results" class="results">
								<img class="support-icon" src="images/icon-support-pro.svg">
								<h3 class="support-cat h3-title left white">Pro</h3>
								<p class="support-explain p-text left gray">
									&bull; &nbsp; Ontdek alle mogelijkheden en voordelen van SafeSpace Pro.<br>
									&bull; &nbsp; Onze SafeSpace Specialisten komen graag bij je langs om alles gebruiksklaar te maken!<br>
									&bull; &nbsp; Hulp bij het vergelijken van onze pakketten of losse items.<br>
								</p>
							</div>
						</div>
					</a>

					<a onclick="supportdownload1(); setTimeout(supportdownload2, 3000);">
						<div id="results">
							<div id="results" class="results">
								<img class="support-icon" src="images/icon-support-defecten.svg">
								<h3 class="support-cat h3-title left white">Defecten</h3>
								<p class="support-explain p-text left gray">
									&bull; &nbsp; Tips om zelf problemen op te lossen.<br>
									&bull; &nbsp; Neem contact op met onze Support en krijg de hulp die je nodig hebt.<br>
									&bull; &nbsp; Een defect SafeSpace product opsturen voor reparatie? Wij helpen je graag!<br>
								</p>
							</div>
						</div>
					</a>

					<a href="mailto:asksafespace@gmail.com?subject=SafeSpace - Support-verzoek">
						<div id="results">
							<div id="results" class="results onderste">
								<img class="support-icon" src="images/icon-support-mail.svg">
								<h3 class="support-cat h3-title left white">Mail ons</h3>
								<p class="support-explain p-text left gray"><br>
									&bull; &nbsp; Staat je vraag er niet tussen? Stuur ons gerust een bericht!<br>
								</p>
							</div>
						</div>
					</a>

					<script type="text/javascript">
						function supportdownload1() {
							Swal.fire({
								icon: 'success',
								title: 'Gelukt!',
								text: 'Jouw Support verzoek is verwerkt, de documentatie wordt zo gedownload.',
							})
						}

						function supportdownload2() {
							window.open("files/handleiding");
						}
					</script>
				</div> <!-- Support -->
				<?php include "footer.php"; ?>
			</div> <!-- /wrapper -->
		</div>

		<!-- Hamburger Menu + Menu Overlay -->
		<a onclick="openNav()">
			<div id="container">
				<div class="circle"></div>
				<div class="hamburger">
					<img src="images/icon-menu.svg" alt="Menu">
				</div>
			</div>
		</a>
</body>

</html>

<!-- Scripts-->
<script src="js/preloader.js" type="text/javascript"></script>
<script src="js/live-search.js" type="text/javascript"></script>
<script src="js/hamburger.js" type="text/javascript"></script>
<script src="js/buttontop.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>