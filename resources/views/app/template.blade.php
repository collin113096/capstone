@include('app.header')
<div class="container-fluid">
<div class="row py-3">

	<div class="col-md-6">
		<div class="row align-items-center">
			<div class="col-md-3 text-center">
				<img src="{{ asset('images/logo.png') }}"" alt="">
			</div>
			<div class="col-md-9">
				<span class="h1 text-primary">PAGSANJAN ACADEMY</span>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<!-- BLANK -->
	</div>

</div>
	@yield('content')
</div>
@include('app.footer')