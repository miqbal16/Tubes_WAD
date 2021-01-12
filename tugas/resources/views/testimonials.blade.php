<!DOCTYPE HTML>
<html>
	<head>
		<title>RENTALIN AJA | ULASAN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

	<style>
			.checked {color: orange;}
	</style>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
							<a href="/" class="logo">
								<span class="fa fa-car"></span> <span class="title">RENTALIN AJA!</span>
							</a>

						<!-- Nav -->
							<nav>
								<ul>
									<li><a href="#menu">Menu</a></li>
								</ul>
							</nav>

					</div>
				</header>

			<!-- Menu -->
				<nav id="menu">
					<h2>Menu</h2>
					<ul>
						<li><a href="/">Utama</a></li>

						
						<li><a href="/mobil_dengan_supir">Mobil Dengan Supir</a></li>

						<li><a href="/mobil_tanpa_supir">Mobil Tanpa Supir</a></li>

						<li>
							<a href="#" class="dropdown-toggle">Lainnya</a>

							<ul>
								<li><a href="/about">Tentang</a></li>
								<li><a href="/team">Kami</a></li>
								<li><a href="/blog">Hits Bandung</a></li>
								<li><a href="/testimonials" class="active">Ulasan</a></li>
								<li><a href="/faq">FAQ</a></li>
							</ul>
						</li>
						<li><a href="/contact">Hubungi Kami</a></li>
					</ul>
				</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Ulasan Rentalin Aja!</h1>

							<div class="row">
								<div class="col-sm-6 text-center">
									<p><strong>JohnThor</strong></p>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<p class="m-n"><em>"Mobil nyaman dan bersih"</em></p>
								</div>

								<div class="col-sm-6 text-center">
									<p><strong>Johnydep</strong> </p>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<p class="m-n"><em>"Rekomen banget ini pokoknya!"</em></p>
								</div>
							</div>

							<br>

							<div class="row">
								<div class="col-sm-6 text-center">
									<p><strong>JohnThor</strong></p>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<p class="m-n"><em>"Mobil kondisi bagus pelayanannya juga simple"</em></p>
								</div>

								<div class="col-sm-6 text-center">
									<p><strong>Johnydep</strong> </p>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<p class="m-n"><em>"Oke lah"</em></p>
								</div>
							</div>

							<br>

							<div class="row">
								<div class="col-sm-6 text-center">
									<p><strong>JohnThor</strong></p>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<p class="m-n"><em>"So far bagus bagus aja recommend nih buat yang mau nyewa mobil secara online gini ga ribet"</em></p>
								</div>

								<div class="col-sm-6 text-center">
									<p><strong>Johnydep</strong> </p>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<p class="m-n"><em>"Sudah beberapa kali tetap tidak mengecewakan"</em></p>
								</div>
							</div>
							
							<br>
							<br>
							<h2>Tambahkan Ulasan</h2>
								<form action="{{route('ulasan.addUlasan')}}" method="post">
									{{ csrf_field() }}
									<div class="fields">
										<div class="field half">
											@if (Route::has('login'))
											@auth
												<input type="text" value="{{ Auth::user()->name }}" name="name" id="name" placeholder="Nama" required/>
												
										@else
												<input type="text" name="name" id="name" placeholder="Nama" required/>
											@endauth
										@endif
											
										</div>

										<div class="field half">
											
										@if (Route::has('login'))
											@auth
											
												<input type="text" value="{{ Auth::user()->email }}" name="email" id="email" placeholder="Email" required/>
										@else
												<input type="text" name="email" id="email" placeholder="Email" required/>
											@endauth
										@endif
										</div>
										
										<div class="field">
											<textarea name="description" id="description" rows="3" placeholder="Ulasan"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="KIRIM" class="primary"></li>
											</ul>
										</div>
									</div>
								</form>

						</div>
					</div>
					

					<div class="image main">
						<center>
						<img src="images/ulasan.png" class="img-fluid" style = "width:30%; margin-top: -15%" alt="">
						</center>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="https://www.facebook.com/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://twitter.com/" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.instagram.com/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>

								&nbsp;
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>