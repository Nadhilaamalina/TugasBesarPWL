@extends('layout.layout')

@section('title', 'Rumah Sakit Medikal Inha')

@section('content')
<div class="container-fluid mg-t-20">

	<!-- breadcrumb -->

	<div class="breadcrumb-header justify-content-between">

					
		<div class="left-content">
			<h4 class="content-title mb-1">Rumah Sakit Medikal Inha</h4>
			<nav aria-label="breadcrumb">
			</nav>
		</div>


	</div>
	<!-- breadcrumb -->

				
	<!-- aboutrs -->
	<div class="card-group">
		<div class="card">
			<img src="{{ asset('gambar/hospital1.jpg') }}" style="width: 340px; height: 340px;" class="rounded-circle" alt="...">
				<div class="card-body">
					<p class="card-text"><small class="text-muted">Tempat Pendaftaran Pasien</small></p>
				</div>
			</div>
		<div class="card">
			<img src="{{ asset('gambar/hospital2.jpg') }}" style="width: 340px; height: 340px;" class="rounded-circle" alt="...">
				<div class="card-body">
					<p class="card-text"><small class="text-muted">Taman</small></p>
				</div>
			</div>
		<div class="card">
			<img src="{{ asset('gambar/hospital3.jpg') }}" style="width: 340px; height: 340px;" class="rounded-circle" alt="...">
				<div class="card-body">
					<p class="card-text"><small class="text-muted">Ruang Tunggu</small></p>
				</div>
			</div>
	</div>

		<div class="card" style="padding:10px;" >
  			<div class="card-body">
				<h5 class="card-title" style="text-align: center;">About Rumah Sakit Medikal Inha</h5>
				<p class="card-text" style="padding:10px;">Rumah Sakit Medikal Inha didirikan pada tahun 1996, yang rumah sakit universitas pertama di wilayah Incheon yang lebih besar.
                    Lokasinya yang ideal dekat dengan bandara internasional, pelabuhan laut, dan teleportasi, bertujuan untuk menjadi pelabuhan medis terbesar di Asia Timur Laut.</p>
					<p style="padding:10px;">Rumah Sakit ini adalah rumah sakit multispesialis dengan 36 Departemen Klinik dan 19 Pusat Khusus termasuk kanker. Ini juga memiliki Pusat Promosi Kesehatan mengkhususkan diri dalam pemeriksaan kesehatan secara keseluruhan.
                    Departemen Klinik meliputi Kedokteran Alergi, Kardiologi, Patologi Klinik, Kedokteran Gigi, Dermatologi, Endokrinologi dan Metabolisme, Gastroenterologi, Pengobatan Infeksi, Nefrologi, Bedah Saraf, Pediatri, Kebidanan dan Ginekologi,
                    Kedokteran Nuklir, Opthalmologi, THT, Bedah Ortopedi, Bedah Plastik, Psikiatri, Pengobatan Rehabilitasi, Bedah Toraks dan Kardiovaskular, dan Urologi untuk menyebutkan beberapa.</p>
			</div>
		</div>

		<div class="container">
			<img src="{{ asset('gambar/gambar1.jpg') }}" style="width: 230px; height: 230px; margin: 10px;" class="img-thumbnail" alt="...">
			<img src="{{ asset('gambar/gambar2.jpg') }}" style="width: 230px; height: 230px; margin: 10px;" class="img-thumbnail" alt="...">
			<img src="{{ asset('gambar/gambar3.jpg') }}" style="width: 230px; height: 230px; margin: 10px;" class="img-thumbnail" alt="...">
			<img src="{{ asset('gambar/gambar4.jpg') }}" style="width: 230px; height: 230px; margin: 10px;" class="img-thumbnail" alt="...">
			<img src="{{ asset('gambar/gambar5.jpg') }}" style="width: 230px; height: 230px; margin: 10px;" class="img-thumbnail" alt="...">
			<img src="{{ asset('gambar/gambar6.jpg') }}" style="width: 230px; height: 230px; margin: 10px;" class="img-thumbnail" alt="...">
			<img src="{{ asset('gambar/gambar13.jpg') }}" style="width: 230px; height: 230px; margin: 10px;" class="img-thumbnail" alt="...">
			<img src="{{ asset('gambar/gambar14.jpg') }}" style="width: 230px; height: 230px; margin: 10px;" class="img-thumbnail" alt="...">
		</div>
		
@endsection