@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Petugas
                </div>
                <div class="card-body">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div><br />
                  @endif
                    <form method="post" action="{{ route('petugas.create') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" name="nama"/>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin: </label><br>
                            <input type="radio" name="jenis" id="jenis" value="Laki-laki">
                            <label for="radio">Laki-laki</label>
                            <input type="radio" name="jenis" id="jenis" value="Perempuan">
                            <label for="radio">Perempuan</label>
                        </div>
                        <div class="form-group">
                            <label for="alamat" style="">Alamat:</label><br>
                            <textarea name="alamat" id="" cols="50" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Agama:</label><br>
                            <select name="agama" id="agama">
                              <option value="">-- Pilih Agama --</option>
                              <option value="Islam">Islam</option>
                              <option value="Kristen">Kristen</option>
                              <option value="Katholik">Katholik</option>
                              <option value="Buddha">Buddha</option>
                              <option value="Hindu">Hindu</option>
                              <option value="Kong Hu Cu">Kong Hu Cu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="notelp">Nomor Telepon:</label>
                            <input type="text" class="form-control" name="notelp" maxlength="13" />
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label><br>
                            <input type="checkbox" name="status" value="aktif" checked="true"> Aktif
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
								</div>
            </div>

        </div>
    </div>
</div>
@endsection
