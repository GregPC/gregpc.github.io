<!DOCTYPE html>
<html lang="pt-br">

<!--Head inicio-->
<?php require ("codigo-fonte/head.php"); ?>
<!--Head Fim-->

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php require ("codigo-fonte/header.php"); ?>
	<!-- Header section end -->

	<!--Banner mkt-->
	<div class="banner-profissional m-auto text-center">
		<div class="banner-row row m-0">
			<div class="banner-left col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center m-0 font-weight-bold">
				<object data="img/banner/icon-trabalhador.svg" type="image/svg+xml" height="155px" alt="icone-trabalhador"></object>
				<h3>ENCONTRE UM PROFISSIONAL</h3>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6"></div>
		</div>
	</div>
	<!--Banner mkt end-->

	<!-- Songs details section -->
	<section class="songs-details-section pb-1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-8">
							<div class="song-details-box">
								<div class="text-center">
									<h3>Marceneiro</h3>
								</div>
								<div class="artist-details">
									<div class="foto-perfil text-center">
										<img src="img/foto-perfil/andre-decor.png" alt="foto-perfil">
									</div>
									<!--
									<div class="rating">
										<input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
										<input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
										<input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
										<input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
										<input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
									</div><br><br><br>-->
									<div class="text-perfil mb-5">
										<h4>André Felipe</h4>
									</div>

									<div class="ad-text">
										<h4>Sobre o Profissional</h4>
										<hr>
										<p><strong>Área de Atendimento: </strong>Manaus e Interior do Amazonas.</p>
										<p class="text-justify"><strong>Trabalho com: </strong>Projetos para móveis,
											manutenção e reforma de móveis.</p>
										<p class="text-justify"><strong>Especialidades: </strong>Projetos com MDF Lacca,
											MDF Madeirado, MDF Tx, Laminação, Formica.
										</p>
										<p class="text-justify"><strong>Diferenciais: </strong>Cumpro prazos acordados
											com clientes, faço visitas até o local da montagem, flexibilização no
											pagamento, sou plantonista - <i>atendo fora do horário comercial.</i>
										</p>
									</div>
								</div>
								<hr>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="song-details-box">
								<h4>Empresa:</h4>
								<hr>
								<!-- song -->
								<section id="contact" class="contact">
									<div class="">
										<div class="row mt-5">
											<div class="info">
												<div class="empresa">
													<div class="mb-5">
														<img src="img/logomarca/andre-decor.png" width="250px" alt="logo-empresa">
													</div>
													<hr>
												</div>
												<div class="address">
													<h4>Localização:</h4>
													<p>Rua 02, loja 27, Conjunto Hiléia 1, Bairro Redenção.</p>
												</div>
												<hr>

												<div class="email">
													<h4>Email:</h4>
													<p>andrecomfor4@gmail.com</p>
												</div>
												<hr>

												<div class="phone">
													<h4>Telefone:</h4>
													<p>(92) 99151-3418</p>
												</div>
												<hr>
												<div class="whatsapp mt-3 mb-3">
													<a href=""><img src="img/marketplace/whatsapp-profissional-mkt.png" alt=""></a>
												</div>
											</div>
										</div>
								</section><!-- End Contact Section -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- Songs details section -->

	<!-- Songs details section -->
	<section class="songs-details-section" style="padding-top: 10px !important;">
		<!-- The grid: four columns -->
		<div style="text-align: center;">
			<h6>Clique na imagem para abrir</h6>
		</div><br>
		<!-- Container for the image gallery -->
		<div class="container">
			<!-- Thumbnail images -->
			<div class="row" style="margin: auto; flex-wrap: nowrap;">
				<div class="column" style="width: 25%">
					<img class="demo cursor" src="img/carousel/andré-felipe/stand-720x480.png" onclick="currentSlide(1)" alt="stand-vidro">
				</div>
				<div class="column" style="width: 25%;">
					<img class="demo cursor" src="img/carousel/andré-felipe/decor-guarda-roupa-720x480.png" onclick="currentSlide(2)" alt="portão de Alumínio">
				</div>
				<div class="column" style="width: 25%;">
					<img class="demo cursor" src="img/carousel/andré-felipe/decor-sofa-chao-720x480.png" onclick="currentSlide(3)" alt="portão de Alumínio">
				</div>
				<div class="column" style="width: 25%;">
					<img class="demo cursor" src="img/carousel/andré-felipe/decor-quiosque-720x480.png" onclick="currentSlide(4)" alt="fachada de vidro">
				</div>
			</div>

			<!-- Full-width images with number text -->
			<div class="mySlides">
				<div class="numbertext">1 / 4</div>
				<img src="img/carousel/andré-felipe/stand-720x480.png" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext">2 / 4</div>
				<img src="img/carousel/andré-felipe/decor-guarda-roupa-720x480.png" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext">3 / 4</div>
				<img src="img/carousel/andré-felipe/decor-sofa-chao-720x480.png" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext">4 / 4</div>
				<img src="img/carousel/andré-felipe/decor-quiosque-720x480.png" style="width:100%">
			</div>

			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>

	</section>
	<!-- Songs details section -->

	<!-- Songs details section 
	<section class="songs-details-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<div class="song-details-box">
								<h3>Avaliações</h3>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	Songs details section -->

	<!-- Slogan::Begin -->
	<?php require ("codigo-fonte/slogan.php"); ?>
	<!-- Slogan::End -->


	<!-- Footer::Begin -->
	<?php require ("codigo-fonte/footer.php"); ?>
	<!-- Footer::End -->


	<!-- Scripts::Begin -->
	<!--====== Javascripts & Jquery ======-->
	<?php require ("codigo-fonte/script.php"); ?>
	<!-- Scripts::End -->


</body>

</html>