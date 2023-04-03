@extends('Admin.layout.app')
@section('title','Tabel Barang')
@php
    use App\Models\Lelang;
@endphp
@section('content')
{{-- untuk mengaktifkan  User::where('id_petugas',$row->id_petugas)->first(); --}}
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tabel Barang</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <a href="/admin/tambah_barang" class="btn btn-primary float-right">Tambah</a>
            </div>
            <div class="container-fluid">
                <table id="myTable" class="table table-bordered table-striped "> 
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Tangggal</th>
                            <th>Haraga Awal</th>
                            <th>Deskripisi Barang</th>
                            <th>Image Barang</th>
                            <th>Lelang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($barang as $row)
                            
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nama_barang }}</td>
                            <td>{{ $row->tgl }}</td>
                            <td>{{ $row->harga_awal }}</td>
                            <td>{{ $row->deskripsi_barang }}</td>
                            <td><img src="{{ asset('barang_lelang').'/'.$row->image_barang }}" alt="" style="width: 125px"></td>
                            <td>@if (Lelang::where('id_barang',$row->id_barang)->get()->count() <= 0)
                                <form action="/admin/tambah_barang_lelang" method="POST">
                                    @csrf
                                    <button class="btn btn-primary" name="id_barang" value="{{ $row->id_barang }}">TambahLelang</button>
                                </form>
                                @else
                                <button class="btn btn-secondary disabled" name="id_barang" value="{{ $row->id_barang }}">Barang telah di lelang</button>
                                 @endif</td>
                            <td>
                                <a href="/admin/delete_data_barang/{{ $row->id_barang }}" class="btn btn-danger ">Delete</a>
                                <a href="/admin/tambah_open_lelang/{{ $row->id_barang }}" class="btn btn-primary ">Lelangkan</a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection