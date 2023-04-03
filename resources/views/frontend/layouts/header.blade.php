<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="logo">
				<a href="/"><span><<clear</span><img src="{{ asset('frontend') }}/images/halal.png" alt="" title="" style="width:50px;"></a>
			</div>
			<div class="head-right">
			  <div class="top-nav">
					<span class="menu"> <img src="{{ asset('frontend') }}/images/icon.png" alt=""/></span>
				<ul class="res">
					
					@if(Auth::check())
					<li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
						Logout
          				</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form></li>
					<li><a href="#">{{Auth::user()->name}}</a></li>
					@else
					<li><a href="/register">Register</a></li>
					<li><a href="/login">login</a></li>
					@endif
				<div class="clearfix"> </div>
				</ul>
				<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.res" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
			<!-- /script-for-menu -->
			 </div>
		    
			<div class="social">
				<ul >
					<li><a class="fa" href="#"> </a></li>
					<li><a class="tw" href="#"> </a></li>
					<li><a class="p" href="#"> </a></li>
				</ul>
				</div>
				
			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<form>
						<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>	
					</form>	
			   </div>   
			</div>
			
			<div class="clearfix"> </div>
			   <!-- search-scripts -->
					<script src="{{ asset('frontend') }}/js/classie.js"></script>
					<script src="{{ asset('frontend') }}/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
			  <!-- //search-scripts -->
		</div>
		
		<div class="clearfix"> </div>
		</div>
	</div>
</div>