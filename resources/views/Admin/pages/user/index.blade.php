@extends('Admin.layout.app')
@section('title','Tabel Lelang')
@section('content')
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">User  Tabel</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="col md-3 mb-3">
                <form action="/admin/user" method="POST">
                    @csrf
                    <select name="filter_level" id="" onchange="if(this,value != 0) {this.form.submit();}">
                        <option value="all">All User</option>
                        <option value="administrasi" {{ request()->filter_level == 'administrasi' ? 'selected' : '' }}> Admin</option>
                        <option value="petugas" {{ request()->filter_level == 'petugas' ? 'selected' : '' }}> Petugas</option>
                        <option value="masyarakat" {{ request()->filter_level == 'masyarakat' ? 'selected' : '' }}>Masyarakat</option>
                    </select>
                </form>
            </div>
            <div class="card-header">
                <a href="" class="btn btn-primary float-right">Tambah</a>
            </div>
            <div class="container-fluid">
                <table id="myTable" class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Level</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ( $user as $row )
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->level}}</td>
                                <td>{{ $row->name}}</td>
                                <td><a href="mailto:{{ $row->email }}">{{ $row->email }}</a></td>
                                <td><a href="tel:{{ $row->telp }}">{{ $row->telp }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection