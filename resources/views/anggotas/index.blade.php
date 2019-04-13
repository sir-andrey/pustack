@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Data Anggota
                </div>
                <div class="card-body">
					<button class="btn btn-primary" data-toggle="modal" data-target="#createAnggotaModal">Create Data</button>
					<a href="{{ route('anggota.print') }}"><button class="btn btn-primary">Cetak Data</button></a>
					<table class="table table-hover">
						<thead class="thead-light text-center">
							<tr>
								<th>Nama</th>
								<th>Jenis</th>
								<th>Alamat</th>
								<th>Agama</th>
								<th>No Telp</th>
								<th colspan="2" class="text-center"></th>
							</tr>
						</thead>
						<tbody class="text-center">
							@foreach( $anggotas as $anggota )
							<tr>
								<td>{{ $anggota->nama }}</td>
								<td>{{ $anggota->jenis }}</td>
								<td>{{ $anggota->alamat }}</td>
								<td>{{ $anggota->agama }}</td>
								<td>{{ $anggota->notelp }}</td>
								<td><button class="btn btn-primary col-sm-10" data-toggle="modal" data-target="#editAnggotaModal" data-id="{{ $anggota->id }}" data-nama="{{ $anggota->nama }}" data-jenis="{{ $anggota->jenis }}" data-alamat="{{ $anggota->alamat }}" data-agama="{{ $anggota->agama }}" data-notelp="{{ $anggota->notelp }}" >Edit</button></td>
								<td><a href="{{ route('anggota.destroy', $anggota->id) }}"><button class="btn btn-danger col-sm-8">Delete</button></a></td>
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

<!-- Modal -->
<div class="modal fade" id="createAnggotaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel">New message</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
		        <form method="post" action="{{ route('anggota.store') }}">
		            @csrf
		            <div class="form-group">
		                <label for="name">Nama:</label>
		                <input type="text" class="form-control" name="nama" />
		            </div>
		            <div class="form-group">
		                <label>Jenis Kelamin:</label><br>
		                <input type="radio" name="jenis" id="jenis" value="Laki-laki" checked>
		                <label for="radio">Laki-laki</label>
		                <input type="radio" name="jenis" id="jenis" value="Perempuan">
		                <label for="radio">Perempuan</label>
		            </div>
		            <div class="form-group">
		                <label for="alamat">Alamat:</label><br>
		                <textarea name="alamat" id="alamat" class="form-control" rows="3"></textarea>
		            </div>
		            <div class="form-group">
		                <label for="name">Agama:</label><br>
		                <select name="agama" id="agama" class="form-control">
							<option value ="">-- Pilih Agama --</option>
							<option value ="Islam">Islam</option>
							<option value ="Kristen">Kristen</option>
							<option value ="Katholik">Katholik</option>
							<option value ="Buddha">Buddha</option>
							<option value ="Hindu">Hindu</option>
							<option value ="Kong Hu Cu">Kong Hu Cu</option>
		                </select>
		            </div>
		            <div class="form-group">
		                <label for="notelp">Nomor Telepon:</label>
		                <input type="text" class="form-control" name="notelp" />
		            </div>
		        </form>
      		</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        	<button type="submit" class="btn btn-primary">Tambah</button>
	      	</div>
    	</div>
  	</div>
</div>

<div class="modal fade" id="editAnggotaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel">New message</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
		        <form method="post" action="{{ route('anggota.update') }}">
		            @csrf
		            <input type="hidden" name="id" id="id">
		            <div class="form-group">
		                <label for="name">Nama:</label>
		                <input type="text" class="form-control" name="nama" id="nama" />
		            </div>
		            <div class="form-group">
		                <label>Jenis Kelamin:</label><br>
		                <input type="radio" name="jenis" id="jenis" value="Laki-laki" checked>
		                <label for="radio">Laki-laki</label>
		                <input type="radio" name="jenis" id="jenis" value="Perempuan">
		                <label for="radio">Perempuan</label>
		            </div>
		            <div class="form-group">
		                <label for="alamat">Alamat:</label><br>
		                <textarea name="alamat" id="alamat" class="form-control"></textarea>
		            </div>
		            <div class="form-group">
		                <label for="name">Agama:</label><br>
		                <select name="agama" id="agama" class="form-control">
							<option value ="">-- Pilih Agama --</option>
							<option value ="Islam">Islam</option>
							<option value ="Kristen">Kristen</option>
							<option value ="Katholik">Katholik</option>
							<option value ="Buddha">Buddha</option>
							<option value ="Hindu">Hindu</option>
							<option value ="Kong Hu Cu">Kong Hu Cu</option>
		                </select>
		            </div>
		            <div class="form-group">
		                <label for="notelp">Nomor Telepon:</label>
		                <input type="text" class="form-control" name="notelp" id="notelp" />
		            </div>
		            <button type="submit" class="btn btn-primary">Edit</button>
		        </form>
      		</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        	<button type="button" class="btn btn-primary">Send message</button>
	      	</div>
    	</div>
  	</div>
</div>
@endsection
