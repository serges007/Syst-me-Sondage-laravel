@extends('template')

@section('contenu')
	<div class="col-sm-offset-3 col-sm-6">
		<br>
		@if(session('error'))
			<div class="alert alert-danger">{{ session('error') }}</div>
		@endif
		<div class="panel panel-primary">	
			<div class="panel-heading">Création d'un nouveau mot de passe</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					<!-- Formulaire -->
					{!! Form::open(['url' => 'password/reset', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}	
						{!! Form::hidden('token', $token) !!}
						{!! Form::control('email', $errors, 'email', 'Email') !!}
						{!! Form::password_bis($errors, 'password', 'Mot de passe') !!}
						{!! Form::password_bis($errors, 'password_confirmation', 'Confirmation mot de passe') !!}
						{!! Form::button_submit('Envoyer') !!}
					{!! Form::close() !!}
					<!-- Fin du formulaire -->
				</div>
			</div>
		</div>
	</div>
@stop					
 

