<!DOCTYPE HTML>
<html>
	<head>
		<title>RENTALIN AJA | TANPA SUPIR</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
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
									<li><a href="/testimonials">Ulasan</a></li>
									<li><a href="/faq">FAQ</a></li>
								</ul>
							</li>
							<li><a href="/contact">Hubungi Kami</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Pilihan Mobil Tanpa Supir</h1>

							<!-- Fleet -->
							<!-- TANPA SUPIR -->
							<section class="tiles">
									@foreach ($car as $cr)
										@if($cr->status == "Tanpa Driver")
									<article class="style1">
										<span class="image">
											<img src="img_car/{{$cr->img_path}}" alt="image_car" />
										</span>
										<a href="#footer" class="scrolly">
											<h2>{{$cr->name}}</h2>
											
											<p>Harga mulai dari: <strong> Rp. {{$cr->price}}</strong> per hari
											<br>
												<i class="fa fa-user"></i> {{$cr->isi_penumpang}} &nbsp;&nbsp;
												<i class="fa fa-sign-out"></i>{{$cr->pintu}} &nbsp;&nbsp;
												<i class="fa fa-cog"></i> A/M
											</p>
											<div class="content">
												<p>{{$cr->description}}</p>
											</div>
										</a>
									</article>
								@endif
							@endforeach		
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<h2>Pinjam Sekarang</h2>
							
							<form method="post" action="/pembayaran">
								{{ csrf_field() }}
								<div class="fields">
									<div class="field half">
										@if (Route::has('login'))
											@auth
												<input type="text" value="{{ Auth::user()->name }}" name="name" id="name" placeholder="Nama Anda" required readonly/>
										
										@else
												<input type="text" name="name" id="name" placeholder="Nama Anda" required/>
											@endauth
										@endif
									</div>
										
									<div class="field half">
										<select name="name_car" id="vehicle-type">
											@foreach ($car as $cr)
												@if($cr->status == "Tanpa Driver")
													<option value="{{$cr->id}}">{{$cr->name}}</option>
												@endif
											@endforeach
										</select>
									</div>

									<div class="field half">
										<label>Mulai Rental</label>
										<input type="date" class="form-control" id="inputDate" name="mulai" placeholder="Tanggal dan waktu penjemputan" required>
									</div>


									<div class="field half">
										<label>Akhir Rental</label>
										<input type="date" class="form-control" id="inputDate" name="kembali" placeholder="Tanggal dan waktu kembali" required>
									</div>

									<div class="field half">
										@if (Route::has('login'))
											@auth
												<input type="text" value="{{ Auth::user()->email }}" name="email" id="email" placeholder="Email" required readonly/>
										@else
												<input type="text" name="email" id="email" placeholder="Email" required/>
											@endauth
										@endif
									</div>

									<div class="field half">
										<input type="number" name="no_hp" class="form-control" id="phone" placeholder="No. Handphone" required/>
									</div>

									<div class="field">
										<textarea name="keterangan" id="message" rows="3" placeholder="Alamat" required></textarea>
									</div>

									<div class="field text-right">
										<label>&nbsp;</label>

										<ul class="actions">
											<li><input type="submit" value="Lanjutkan" class="primary" required/></li>
										</ul>
										</div>
									</div>
								</form>
								
							<ul class="copyright">
								<li>Copyright © 2020 Rentalin Aja! </li>
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