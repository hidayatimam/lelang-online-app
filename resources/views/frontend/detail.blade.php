@extends('frontend.layouts.app')
@section('content')
<div class="container">
            <section class="section-card">
                <div class="card card-1">
                    <div class="row" style="margin:2.5vh">
                    <div class="col-md-6">
                    <a href="#popup">
                    <img src="{{ asset('barang_lelang').'/'.$detail_lelang->image_barang }}" alt="" class="card-img" >
                    </a>
                    </div> 
                    <div class="col-md-6">
                        <h1>{{ $detail_lelang->nama_barang }}</h1>
                        <h2>{{ $detail_lelang->harga_awal }}</h2>
                        <p>{{ $detail_lelang->deskripsi_barang }}</p>
                    </div> 
                </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta Lelang</th>
                            <th>Nama Barang</th>
                            <th>Tawaran</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pelelang as $row)
    
                    <tbody>
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row->name }}</th>
                            <th>{{ $row->nama_barang }}</th>
                            <th>Rp.{{ number_format($row->penawaran_harga) }}</th>
                        </tr>
                    </tbody>

                    @endforeach
                </table>
            </section>
            <div class="popup" id="popup">
                <div class="popup__content">
                    <div class="popup__img">
                        <img src="{{ asset('barang_lelang').'/'.$detail_lelang->image_barang }}" alt="" style="width:100px;">
                        <a href="#" class="popup__close">&times;</a>
                    </div>
                    <div class="popup__header">
                        <h1>Nama Barang</h1>
                        @if ($detail_lelang->harga_akhir == null)
                        <h5>Belum ada penawar</h5>
                    @else
                        <h5>Tertinggi : Rp.{{ number_format($detail_lelang->harga_akhir) }}</h5>
                    @endif
                    </div>
                    <form action="/ikut_lelang/{{ $detail_lelang->id_lelang }}" method="post">
                        @csrf
                        <div class="">
                            <label for="">Masukkan Harga</label> 
                            <input type="number" name="harga_akhir" placeholder="ikut lelang">
                        </div>
                        <div class="">
                            <button type="submit" class="btn popup__btn">Ikuti</button>
                        </div>
                    </form>
                </div>
            </div>
</div>     
@endsection