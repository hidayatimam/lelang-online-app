<!DOCTYPE HTML>
<html>
<head>
<title>Lelang</title>

      <!-- Bootstrap CSS -->
      {{-- <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
         crossorigin="anonymous"
      /> --}}
	{{-- google lapis --}}
<link href="{{ asset('frontend') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('frontend') }}/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="{{ asset('frontend') }}/css/flexslider.css" type="text/css" media="screen" />

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>

<meta name="keywords" content="Auction Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/move-top.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
</head>
<body>
<!-- //end-smoth-scrolling -->
<!--header start here-->
@include('frontend.layouts.header')
<!--header end here-->
<!--banner strip start here-->
<!--banner strip end here--> 
<!--services start here-->
	@yield('content')
<!--services end here-->
<!--fetures start here-->

<!--features end here-->
<!--effec start here-->

<!--effec end here-->
<!--project star here-->

<!--project end here-->
<!--clients start here-->
<div class="clients">
	<div class="container">
		<div class="clients-main">
			<div class="clients-top">
				<h3><span class="clien-hding">Apa Keuntungan </span>Lelang onlne</h3>
				<p>Harga Produknya Relatif Lebih Murah</p>
			</div>
			<div class="clients-bottom">
		        <section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<p>Ini karena di toko online selalu tersedia penawaran seru. Banyak promo menarik yang bisa kamu nikmati, seperti diskon, cashback dan berbagai promosi lainnya</p>
									<span class="heart-beet"> </span>
									<h4>Pasti Terjangkau!!</h4>
								</li>
								<li>	
									<p> Penjualan lelang didukung oleh dokumen yang sah karena sistem lelang mengharuskan Pejabat Lelang meneliti lebih dahulu tentang keabsahan penjual dan barang yang akan dijual (legalitas subjek dan objek lelang), sehingga ketika kita menjadi pemenang lelang, tentu saja barang yang kita miliki sudah terjamin dari berbagai sisi legalitasnya</p>
									<span class="heart-beet"> </span>
									<h4>Harga tidak membuat dompet menangis</h4>
								</li>
								<li>
									<p>Dalam hal barang yang dibeli adalah barang tidak bergerak berupa tanah, pembeli tidak perlu lagi mengeluarkan biaya tambahan untuk membuat akta jual beli ke PPAT tetapi dengan Risalah Lelang pembeli dapat langsung ke Kantor Pertanahan setempat untuk balik nama. Hal tersebut karena Risalah Lelang merupakan akta otentik dan statusnya sama dengan akta notaris.</p>
									<span class="heart-beet"> </span>
									<h4>Pasti legal</h4>
								</li>	
								<div class="clearfix"> </div>
							</ul>
						</div>
					</section>
			</div>
		 <div class="clearfix">	 </div>
		</div>
	</div>
</div>
<!-- FlexSlider -->
				  <script defer src="{{ asset('frontend') }}/js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					  SyntaxHighlighter.all();
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
			<!-- FlexSlider -->
<!--clients end here-->
<!--purchase start here-->

<!--purchase end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-3 footer-grid">
				<h3>About This Theme</h3>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.account of the system.</p>
			</div>
			<div class="col-md-3 footer-grid">
				<h3>Recents Posts</h3>
			  <div class="ftr-sub-gd">
				<div class="col-md-4 ftr-gd2-img">
					<a href="#"><img src="{{ asset('frontend') }}/images/s1.jpg" alt=""></a>
				</div>
				<div class="col-md-8 ftr-gd2-text">
						<a href="#"><h4>How to Have The Best Vacation</h4></a>
						<a href="#"><p>Mar 3rd,2015</p></a>
				</div>
				<div class="clearfix"> </div>
			  </div>
			  <div class="ftr-sub-gd">
				<div class="col-md-4 ftr-gd2-img">
					<a href="#"><img src="{{ asset('frontend') }}/images/s2.jpg" alt=""></a>
				</div>
				<div class="col-md-8 ftr-gd2-text">
						<a href="#"><h4>How to Have The Best Vacation</h4></a>
						<a href="#"><p>Mar 3rd,2015</p></a>
				</div>
				<div class="clearfix"> </div>
			  </div>
			  <div class="ftr-sub-gd">
				<div class="col-md-4 ftr-gd2-img">
					<a href="#"><img src="{{ asset('frontend') }}/images/s3.jpg" alt=""></a>
				</div>
				<div class="col-md-8 ftr-gd2-text">
						<a href="#"><h4>How to Have The Best Vacation</h4></a>
						<a href="#"><p>Mar 3rd,2015</p></a>
				</div>
				<div class="clearfix"> </div>
			  </div>
		   </div>
			<div class="col-md-3 footer-grid">
				<h3>Categories</h3>
				<ul>
					<li><a href="#">Featured</a></li>
					<li><a href="#">General</a></li>
					<li><a href="#">Lorem Ipsum</a></li>
					<li><a href="#">literature</a></li>
					<li><a href="#">Videos</a></li>
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h3>Recent Projects</h3>
				<div class="ftr-gd4-img">
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f1.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f2.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f3.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f4.jpg" alt=""></a></div>
				  <div class="clearfix"> </div>
				</div>
				<div class="ftr-gd4-img">
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f5.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f6.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f7.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f8.jpg" alt=""></a></div>
				  <div class="clearfix"> </div>
				</div>
				<div class="ftr-gd4-img">
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f9.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f10.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f11.jpg" alt=""></a></div>
				    <div class="col-md-3 ftr-gd4-1"><a href="#"><img src="{{ asset('frontend') }}/images/f12.jpg" alt=""></a></div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	<div class="copyright">
	<div class="container">
		<div class="copy-main">
			<div class="copy-left">
				<p>Design By<a href="http://w3layouts.com/" target="-blank"> W3layouts</a></p>
			</div>
			<div class="copy-right"> 
				<ul>
					<li><a class="active" href="index.html">Home</a></li>/
					<li><a href="about.html">About</a></li>/
					<li><a href="blog.html">Blog</a></li>/
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
<script src="{{ asset('admin-lte') }}/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script>
    @if($message = Session::get('success'))
      Swal.fire({
        icon: 'success',
        title: 'App Said : ',
        text: '{{$message}}',
      })
    @endif
    @if($message = Session::get('update'))
      Swal.fire({
        icon: 'warning',
        title: 'App Said : ',
        text: '{{$message}}',
      })
    @endif
    @if($message = Session::get('delete'))
      Swal.fire({
        icon: 'error',
        title: 'App Said : ',
        text: '{{$message}}',
      })
    @endif
</script>
<!--footer end here-->
</body>
</html>