@extends('app.template')
@section('content')
<div id="app">
	<navbar>
		<a class="nav-link nav-item" href="/"><i class="fas fa-globe"></i> PAGSANJAN ACADEMY WEBSITE</a>		
	</navbar>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-4 mt-5">
				<card title="Login" dark-head>
					<form method="post" action="">
						<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
							  </div>
							  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
						</div>
						<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
							  </div>
							  <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
						</div>
					</form>
					<button class="btn btn-primary btn-block">Login</button>
				</card>
			</div>
		</div>
	</div>
</div>

@endsection