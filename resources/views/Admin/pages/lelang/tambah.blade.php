@extends('Admin.layout.app')
@section('title','Tabel Barang')
@section('content')
<div class="container-fluid">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Data Barang</h1>
            </div>
          </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="/admin/tambah_data_barang" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-2">
                    <label for="name">Nama Barang</label>
                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="name"   name="nama_barang" placeholder="Nama barang" required>

                    @error('nama_barang')
                        <span class="invalid-feedback"  role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    
                </div>
                <div class="form-group my-2">
                    <label for="harga_awal">Harga awal</label>
                    <input type="number" class="form-control @error('harga_awal') is-invalid @enderror" id="name" name="harga_awal" placeholder="harga awal" required>

                    @error('harga_awal')
                        <span class="invalid-feedback"  role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    
                </div>
                <div class="form-group my-2">
                    <label for="deskripsi">Deskripsi Barang</label>
                    <input type="text" class="form-control @error('deskripsi_barang') is-invalid @enderror" id="name" name="deskripsi_barang" placeholder="deskripsi_barang" required>

                    @error('deskripsi_barang')
                        <span class="invalid-feedback"  role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    
                </div>
                <div class="form-group my-2">
                    <label for="image_barang">Gambar Barang</label> <br>
                    <input type="file"  @error('image_barang') is-invalid @enderror" id="name" name="image_barang" placeholder="image_barang" required>

                    @error('image_barang')
                        <span class="invalid-feedback"  role="alert"><strong>{{ $message }}</strong></span>
                    @enderror       
                </div>
                <button class="btn btn-success float-right" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection