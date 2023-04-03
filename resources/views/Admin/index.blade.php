@extends('Admin.layout.app')
@section('title','Dashboard')
@section('content')
@php
use App\Models\Lelang;
use App\Models\Barang;
use App\Models\User;
use App\Models\HistoryLelang;
@endphp
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboad</h1>
            </div>
          </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa-sharp fa-solid fa-box"></i></li>
                  <li class="list-group-item">Total Barang <br><span>{{ Barang::count() }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa-solid fa-cart-shopping"></i></li>
                  <li class="list-group-item">Terjual<br><span>{{ Lelang::where('status','dibuka')->count() }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa-solid fa-rectangle-xmark"></i></li>
                  <li class="list-group-item">Lelang di tutup<br><span>{{ Lelang::where('status','dibuka')->count() }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa-sharp fa-solid fa-users"></i></li>
                  <li class="list-group-item">User Masyarakat <br>{{ User::where('level','masyarakat')->count() }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection