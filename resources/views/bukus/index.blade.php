@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Data Buku
                </div>
                <div class="card-body">
									<a href="{{ route('buku.halcreate') }}"><button class="btn btn-primary">Create Data</button></a>
									<table class="table table-hover">
										<thead class="thead-light text-center">
											<tr>
												<th>Nama</th>
												<th>Penulis</th>
												<th>Genre</th>
												<th>Tahun Terbit</th>
												<th>Penerbit</th>
												<th>Stock</th>
												<th colspan="2" class="text-center"></th>
											</tr>
										</thead>
										<tbody class="text-center">
											@foreach( $bukus as $buku )
											<tr>
												<td>{{ $buku->nama }}</td>
												<td>{{ $buku->penulis }}</td>
												<td>{{ $buku->genre }}</td>
												<td>{{ $buku->terbit }}</td>
												<td>{{ $buku->penerbit }}</td>
												<td>{{ $buku->stock }}</td>
												<td><a href="{{ route('buku.haledit', $buku->id) }}"><button class="btn btn-primary col-sm-10" >Edit</button></a></td>
												<td><a href="{{ route('buku.delete', $buku->id) }}"><button class="btn btn-danger col-sm-8">Delete</button></a></td>
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
