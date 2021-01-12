<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RENTALIN AJA | UTAMA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
		@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
	@endif

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
                                        <li>
                                            @if (Route::has('login'))
                                        
                                            	@auth
												<li class="nav-item dropdown">
													<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 10px" v-pre>
														{{ Auth::user()->name }}
													</a>
				
													<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
														<a class="dropdown-item" href="{{ route('logout') }}"
													   	onclick="event.preventDefault();
																	 	document.getElementById('logout-form').submit();">
															{{ __('Logout') }}
														</a>
				
														<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
															@csrf
														</form>
												</div>

												@if (Auth::user()->name == "admin")
													<li><a href="{{ route('myAdmin') }}" class="ml-4 text-sm text-gray-700 underline" style="margin-right: 10px">Admin Mode</a></li>
												@endif

											</li>
                                            @else
                                                <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li>
                        
                                                @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" style="margin-right: 30px">Register</a></li>
                                                @endif
                                            @endauth
                                        
                                    		@endif
									
                                        </li>
                                        
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
									<li><a href="/testimonials">Ulasan</a></li>
									<li><a href="/faq">FAQ</a></li>
								</ul>
							</li>
							<li><a href="/contact">Hubungi Kami</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="images/welcome.jpg" alt="First slide" height="750px">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/welcome2.jpg" alt="Second slide" height="750px">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/welcome3.jpg" alt="Third slide" height="750px">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>Rentalin aja dulu!</h1>
								<p>Rentalin Aja adalah penyedia sewa mobil murah di Bandung. Tersedia Aneka macam unit antara lain : Pajero Dakar, Fortuner, Camry, Ayla, H-RV, Grand Livina, Xpander, Honda Accord, CRV, Alphard. Anda juga bisa memilih ingin menggunakan Unit Matic atau Manual. Di Rentalin Aja anda bisa sewa mobil dengan supir ataupun lepas kunci, mulai dari Harian, Mingguan hingga Bulanan.
								</header>

							<br>

							<h2 class="h2">Dengan Supir</h2>

							<!-- Offer -->
							<!-- DENGAN SUPIR -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/supir_pajero.jpg" alt="" width="250px" height="250px" />
									</span>
									<a href="/mobil_dengan_supir">
										<h2>Pajero Dakar</h2>
										
										<p>Harga mulai dari: <strong> Rp. 1.600.000</strong> per hari
										<br>
										<i class="fa fa-user"></i> 5 &nbsp;&nbsp;
										<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
										<i class="fa fa-cog"></i> A/M
										</p>
										<div class="content">
											<p>Mobil ini dapat memuat 5 orang. Terdapat 1 bagasi berukuran sedang. Tersedia dalam 2 transmisi manual dan automatic.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/supir_alphard.jpg" alt="" width="250px" height="250px" />
									</span>
									<a href="/mobil_dengan_supir">
										<h2>Alphard</h2>
										
										<p>Harga mulai dari: <strong> Rp. 1.800.000</strong> per hari
										<br>
											<i class="fa fa-user"></i> 5 &nbsp;&nbsp;
											<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-cog"></i> A/M
										</p>
										<div class="content">
											<p>Mobil ini dapat memuat 5 orang. Terdapat 1 bagasi berukuran besar. Tersedia dalam 2 transmisi manual dan automatic.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/supir_crv.jpg" alt="" width="250px" height="250px" />
									</span>
									<a href="/mobil_dengan_supir">
										<h2>CRV</h2>
										
										<p>Harga mulai dari: <strong> Rp. 1.000.000</strong> per hari
										<br>
											<i class="fa fa-user"></i> 3 &nbsp;&nbsp;
											<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-cog"></i> A/M
											</p>
										<div class="content">
											<p>Mobil ini dapat memuat 3 orang. Terdapat 1 bagasi berukuran besar. Tersedia dalam 2 transmisi manual dan automatic.</p>
										</div>
									</a>
								</article>
							</section>

							<p class="text-center"><a href="/mobil_dengan_supir">Lihat Lebih Banyak &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							<h2 class="h2">Tanpa Supir</h2>

							<!-- Fleet -->
							<!-- TANPA SUPIR -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/tanpasupir-xpander.jpg" alt="" />
									</span>
									<a href="#footer" class="scrolly">
										<h2>Xpander</h2>
										
										<p>Harga mulai dari: <strong> Rp. 400.000</strong> per hari
										<br>
											<i class="fa fa-user"></i> 6 &nbsp;&nbsp;
											<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-cog"></i> A/M
										</p>
										<div class="content">
											<p>Mobil ini dapat memuat 6 orang. Terdapat 1 bagasi berukuran besar. Tersedia dalam 2 transmisi manual dan automatic.</p>
										</div>
									</a>
								</article>
								
								<article class="style2">
									<span class="image">
										<img src="images/tanpasupir-ayla.png" alt="" />
									</span>
									<a href="#footer" class="scrolly">
										<h2>Ayla</h2>
										
										<p>Harga mulai dari: <strong> Rp. 200.000</strong> per hari
										<br>
											<i class="fa fa-user"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-cog"></i> A/M
										</p>
										<div class="content">
											<p>Mobil ini dapat memuat 4 orang. Terdapat 1 bagasi berukuran kecil. Tersedia dalam 2 transmisi manual dan automatic.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/tanpasupir-alphard.jpg" alt="" />
									</span>
									<a href="#footer" class="scrolly">
										<h2>Alphard</h2>
										
										<p>Harga mulai dari: <strong> Rp. 500.000</strong> per hari
										<br>
											<i class="fa fa-user"></i> 6 &nbsp;&nbsp;
											<i class="fa fa-sign-out"></i> 4 &nbsp;&nbsp;
											<i class="fa fa-cog"></i> A/M
										</p>
										<div class="content">
											<p>Mobil ini dapat memuat 6 orang. Terdapat 1 bagasi berukuran besar. Tersedia dalam 2 transmisi manual dan automatic.</p>
										</div>
									</a>
								</article>
							</section>

							<p class="text-center"><a href="/mobil_tanpa_supir">Lihat Lebih Banyak &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							<h2 class="h2">Hits Bandung</h2>
							
							<div class="row">
								<div class="col-sm-6 text-center">
									<img src="images/blog-maribaya.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="https://www.traveloka.com/id-id/activities/indonesia/product/the-lodge-maribaya-tickets-2001260770103">The Lodge Maribaya</a></h2>

									<p> Alya &nbsp;|&nbsp; 12/12/2020</p>
								</div>

								<div class="col-sm-6 text-center">
								<img src="images/blog-dusunbambu.jpg" class="img-fluid" alt="" />

								<h2 class="m-n"><a href="https://www.traveloka.com/id-id/hotel/indonesia/dusun-bambu-resort-3000010005406">Dusun Bambu Leisure Park</a></h2>

									<p> Alya &nbsp;|&nbsp; 12/12/2020</p>
								</div>

								
							</div>

							<p class="text-center"><a href="/blog">Lihat Lebih Banyak &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							<h2 class="h2">Ulasan</h2>
							
							<div class="row">
								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"So far bagus bagus aja recommend nih buat yang mau nyewa mobil secara online gini ga ribet"</em></p>

									<p><strong> - JohnThor</strong></p>
								</div>

								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Sudah beberapa kali tetap tidak mengecewakan"</em></p>

									<p><strong>- Johnydep</strong> </p>
								</div>
							</div>

							<p class="text-center"><a href="/testimonials">Lihat Lebih Banyak &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
									<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
									<li><span class="fa fa-map-pin"></span> Jl. Umayah II Blok A3/13, Telkom University </li>
								</ul>

								<h2>Follow Us</h2>

								<ul class="icons">
									<li><a href="https://www.facebook.com/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://twitter.com/" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.instagram.com/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
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
