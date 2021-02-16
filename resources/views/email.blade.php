@extends('layout') 
@section('title', 'Email')
@section('mycontent')
<h1>Email</h1>
<section style="padding-top: 60px">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header">
						Contactanos
					</div>
					<div class="card-body">
					@if(Session::get('message_sent'))
					<div class="alert alert-success" role="alert">
						{{Session::get('message_sent')}}
					</div>
					@endif
						<form method="post" action="{{route('contact.send')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="telefono">Telefono</label>
								<input type="text" name="telefono" class="form-control">
							</div>
							<div class="form-group">
								<label for="msg">Mensaje</label>
								<textarea name="msg" class="form-control"></textarea>
							</div>
							<button type="submit" class="btn btn-primary float-right">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection