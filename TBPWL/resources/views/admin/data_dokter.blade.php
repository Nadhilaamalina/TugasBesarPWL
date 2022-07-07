@extends('layout.layout')

@section('title', 'Data Dokter')

@section('content')
            <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Data Dokter</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				<!-- gambardokter -->
				<div class="card-group">
					<div class="card">
						<img src="{{ asset('gambar/dok1.jpg') }}" style="width: 300px; height: 300px;" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Dokter Umum</h5>
						<p class="card-text"><small class="text-muted">(Dr. dr. Jeon Hyoseop, Sp.B.) I</small></p>
						</div>
					</div>
					<div class="card">
						<img src="{{ asset('gambar/dok2.jpg') }}" style="width: 300px; height: 300px;" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Dokter Anak</h5>
						<p class="card-text"><small class="text-muted">(dr. Kang Minah, Sp.A.) II</small></p>
						</div>
					</div>
					<div class="card">
						<img src="{{ asset('gambar/dok6.jpg') }}" style="width: 350px; height: 300px;" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Dokter Gigi</h5>
						<p class="card-text"><small class="text-muted">(Dr. dr. Linyi, Sp.G.) III</small></p>
						</div>
					</div>
				</div>
				<div class="card-group">
					<div class="card">
						<img src="{{ asset('gambar/dok4.jpg') }}" style="width: 300px; height: 300px;" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Dokter Rehabilitas Medik</h5>
						<p class="card-text"><small class="text-muted">(dr. Kim Minkyu, Sp.RM.) IV</small></p>
						</div>
					</div>
					<div class="card">
						<img src="{{ asset('gambar/dokter5.jpg') }}" style="width: 300px; height: 300px;" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Dokter Spesialis Radiologi</h5>
						<p class="card-text"><small class="text-muted">(Dr. dr. Ronesae, Sp.R.) V</small></p>
						</div>
					</div>
					<div class="card">
						<img src="{{ asset('gambar/dok3.jpg') }}" style="width: 350px; height: 300px;" class="card-img-top" alt="...">
						<div class="card-body">
						<h5 class="card-title">Dokter Forensik</h5>
						<p class="card-text"><small class="text-muted">(Dr. dr. Dylan Wang, Sp.F.) VI</small></p>
						</div>
					</div>
				</div>
				<!-- gambardokterend -->
				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
					    @if(session('sukses'))
					    <div class="alert alert-success my-4">
					        {{session('sukses')}}
					    </div>
					    @endif
					    @if(session('hapus'))
					    <div class="alert alert-warning my-4">
					        {{session('hapus')}}
					    </div>
					    @endif
					    @if(session('update'))
					    <div class="alert alert-info my-4">
					        {{session('update')}}
					    </div>
					    @endif
						<div class="card">
							<div class="card-body">
							    <form method="post" action="/cari_dokter">
							        @csrf
							        <div class="input-group mb-4">
							            <input type="text" placeholder="Cari Nama Dokter..." required class="form-control" name="keyword">
							            <button type="submit" class="btn btn-primary">Cari</button>
							        </div>
							    </form>
							    <a href="/tambah_dokter" class="btn btn-danger mb-3">Tambah</a>
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap border">
										<thead>
											<tr>
												<th>No</th>
												<th>Nomor Dokter</th>
												<th>Nama</th>
												<th>Spesialis</th>
												<th>Diterima</th>
												<th>Telepon</th>
												<th>Alamat</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
						<?php $i = ($dokter->currentPage()*10) - 9 ?>
						 @foreach($dokter as $d)					<tr>
												<th scope="row">{{$i++}}</th>
												<td>{{ $d->no_dokter }}</td>
												<td>{{ $d->nama }}</td>
												<td>{{ $d->spesialis }}</td>
												<td>{{ $d->diterima }}</td>
												<td>{{ $d->telepon }}</td>
												<td>{{ $d->alamat }}</td>
												<td>
						
                            <a href="/edit_dokter/{{$d->id}}"><i class="fas fa-pencil-alt" style="margin-right:5px"></i></a>
                            <form method="post" action="/hapus_dokter" class="d-inline">
                                @csrf
                            <input type="hidden" name="id" value="{{$d->id}}">
                            <button type="submit" class="btn d-inline"><i class="far fa-trash-alt" onclick="return confirm('Yakin mau menghapus {{$d->nama}}?')"></i></button>
                            </form>
												</td>
											</tr>
					    @endforeach						
										</tbody>
									</table>
								</div><!-- bd -->
								<div class="mt-3"></div>
					{{$dokter->links()}}
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection