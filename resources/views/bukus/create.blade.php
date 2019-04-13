@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Buku
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
                    <form method="post" action="{{ route('buku.create') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Judul:</label>
                            <input type="text" class="form-control" name="nama"/>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Nama Penulis:</label>
                            <input type="text" class="form-control" name="penulis">
                        </div>
                        <div class="form-group">
                            <label for="genre" style="">Genre:</label><br>
                            <select class="form-control" class="" name="genre">
                              <option value="">-- Pilih Genre --</option>
                              <option value="Komik">Komik</option>
                              <option value="Novel">Novel</option>
                              <option value="Biografi">Biografi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="terbit">Tahun Terbit:</label><br>
                            <select class="form-control" name="terbit" id="terbit">
                              <option value="">-- Pilih Tahun --</option>
                              <option value="2014">2014</option>
                              <option value="2015">2015</option>
                              <option value="2016">2016</option>
                              <option value="2017">2017</option>
                              <option value="2018">2018</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit:</label>
                            <input type="text" class="form-control" name="penerbit" />
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock:</label><br>
                            <input class="form-control" type="number" name="stock">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
								</div>
            </div>
        </div>
    </div>
</div>
@endsection
