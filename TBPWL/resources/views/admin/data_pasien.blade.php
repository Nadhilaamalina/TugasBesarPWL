@extends('layout.layout')

@section('title', 'Data Pendaftaran Pasien')

@section('content')
            <div class="container-fluid mg-t-20">

				<!-- breadcrumb -->

				<div class="breadcrumb-header justify-content-between">

					
					<div class="left-content">
						<h4 class="content-title mb-1">Data Pendaftaran Pasien</h4>
						<nav aria-label="breadcrumb">
						</nav>
					</div>


				</div>
				<!-- breadcrumb -->

				
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
							     <form method="post" action="/cari_pasien">
							         @csrf
							        <div class="input-group mb-4">
							            <input type="text" placeholder="Cari Nama Pasien..." required class="form-control" name="keyword">
							            <button type="submit" class="btn btn-primary">Cari</button>
							        </div>
							    </form>
							    <a href="/tambah_pasien" class="btn btn-danger mb-3">Tambah</a>
								<div class="table-responsive">
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
									<table class="table table-striped mg-b-0 text-md-nowrap border">
										<thead>
								
					<tr>
												<th>No</th>

		                  						<th>Nama</th>
												<th>Tanggal Lahir</th>
												<th>Penyakit</th>
												<th>Tanggal Masuk</th>
												<th>Alamat</th>
												<th>Telepon</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
					<?php 
					//rumus: ($pasien->currentPage()*jumlah data per halaman) - (jumlah data per halaman - 1) 
					$i = ($pasien->currentPage()*10) - 9 ?>
					  @foreach($pasien as $p)						<tr>
												<th scope="row">{{$i++}}</th>
												<td>{{$p->nama}}</td>
												<td>{{$p->tanggal_lahir}}</td>
												<td>
                            
                            <?php 
                            if($p->penyakit){ 
                            echo $p->penyakit;
                            }
                            else{
                                echo 'none';
                            }
                            ?>				</td>
												<td>{{$p->tanggal_masuk}}</td>
												<td>{{$p->alamat}}</td>
												<td>{{$p->telepon}}</td>
												<td>

                            <a href="/edit_pasien/{{$p->id}}"><i class="fas fa-pencil-alt" style="margin-right:5px"></i></a>
                            <form method="post" class="d-inline" action="/hapus_pasien">
                                @csrf
                                <input type="hidden" name="id" value="{{$p->id}}">
                            <button class="btn" onclick="return confirm('Yakin mau menghapus?')"><i class="far fa-trash-alt"></i></button>
                            </form>
									    		</td>
											</tr>
											
					@endforeach
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						{{$pasien->links()}}
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->


            </div>
@endsection