@extends('frontend.layouts.app')
@section('header')
@section('content')
@include('frontend.layouts.carousel')
<div class="services">
	<div class="container">
		<div class="services-main">
			<div class="services-top">
				<h3>Rekomendasi Barang Untuk Anda</h3>
				<p>pilihan ada di tangan anda</p>
			</div>
			<div class="services-bottom">
				<div class="row">
					@foreach ($lelang as $row)
					<div class="col-sm-6 col-md-4 ser">
						<div class="box-bar">
							<div class="thumbnail">
								<a href="single.html"><img src="{{ asset('barang_lelang').'/'.$row->image_barang }}" alt="" style="widt
								300px;"></a>
								<div class="caption">
									<a href="/detail/{{ $row->id_lelang }}"><h3>{{ $row->nama_barang }}</h3></a>
										<div class="card-body">
                                            @if ($row->harga_akhir == null)
                                                <h5>Belum ada penawar</h5>
                                            @else
                                                <h5>Tertinggi : Rp.{{ number_format($row->harga_akhir) }}</h5>
                                            @endif
                                            <h6 id="countdown{{ $row->id_lelang }}">Time Left : </h6>
                                        </div>	
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection