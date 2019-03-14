@include('app.header')
<div class="container-fluid">
<div class="row py-3">

	<div class="col-md-6">
		<div class="row align-items-center no-gutters">
			<div class="col-md-3 text-center">
				<img src="{{ asset('images/logo.png') }}"" alt="">
			</div>
			<div class="col-md-9">
				<div class="h1" style="color:#008cba; font-family: 'Roboto', sans-serif;" id="header-text">PAGSANJAN ACADEMY</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<!-- BLANK -->
	</div>

</div>
</div>
@yield('content')
@include('app.footer')