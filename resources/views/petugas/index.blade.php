@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Data Petugas
                </div>
                <div class="card-body">
									<a href="{{ route('petugas.halcreate') }}"><button class="btn btn-primary">Create Data</button></a>
									<table class="table table-hover">
										<thead class="thead-light text-center">
											<tr>
												<th>Nama</th>
												<th>Jenis</th>
												<th>Alamat</th>
												<th>Agama</th>
												<th>No Telp</th>
												<th>Status</th>
												<th colspan="2" class="text-center"></th>
											</tr>
										</thead>
										<tbody class="text-center">
											@foreach( $petugas as $petugas )
											<tr>
												<td>{{ $petugas->nama }}</td>
												<td>{{ $petugas->jenis }}</td>
												<td>{{ $petugas->alamat }}</td>
												<td>{{ $petugas->agama }}</td>
												<td>{{ $petugas->notelp }}</td>
												<td>{{ $petugas->status }}</td>
												<td><a href="{{ route('petugas.haledit', $petugas->id) }}"><button class="btn btn-primary col-sm-10" >Edit</button></a></td>
												<td><a href="{{ route('petugas.delete', $petugas->id) }}"><button class="btn btn-danger col-sm-8">Delete</button></a></td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
            </div>
						<br>
						<div class="card">
                <div class="card-header">
                    Data
                </div>
                <div class="card-body">
                    <div class="links">
                      	<a href="{{ route('anggota.index') }}">Data Anggota</a><br>
                        <a href="{{ route('buku.index') }}">Data Buku</a><br>
                        <a href="{{ route('petugas.index') }}">Data Petugas</a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
