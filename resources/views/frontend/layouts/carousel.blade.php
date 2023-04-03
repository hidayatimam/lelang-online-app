<script src="{{ asset('frontend') }}/js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
        nav:true,
      });
    });
  </script>

<div class="banner">
	<div class="container">
		<div class="banner-main">
			<ul class="rslides" id="slider">
	        <li>
	  			<h3>Selmat Di Aplikasi Lelang Online</h3>
				<p>Jangan ikut jika tidak punya uang</p>
	        </li>
	       <li>
	  			<h3>Anda puas kami puas </h3>
				<p>sudah lah uang hanya titipan lelangkan saja</p>
	        </li>
	        <li>
	        	<h3>Mudah Cepat tanggap</h3>
				<p>Selamat lelang</p>
	        </li>
	      </ul>
		</div>
	</div>
</div>
