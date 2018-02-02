@extends('template')

@section('contenu')
	<div class="col-sm-offset-3 col-sm-6">
		<br>
		@if(session('error'))
			<div class="alert alert-danger">{{ session('error') }}</div>
		@endif		
		<div class="panel panel-primary">	
			<div class="panel-heading">Connectez-vous !{!! link_to('register', 'Je m\'inscris !', ['class' => 'btn btn-info btn-xs pull-right']) !!}</div>
			<div class="panel-body"> 

				<!-- Formulaire de login -->
				{!! Form::open(['url' => 'login']) !!}	
					{!! Form::control('email', $errors, 'email', 'Email') !!}
					{!! Form::password_bis($errors, 'password', 'Mot de passe') !!}
					{!! Form::checkbox_bis('remember', 'Se rappeler de moi') !!}
					{!! Form::button_submit('Envoyer') !!}
				{!! Form::close() !!}
				<!-- Fin du formulaire -->

			</div>
		</div>

		<!-- Bouton de retour à la page précédente -->
		{!! Html::button_back() !!}

		<!-- Bouton pour l'oubli du mot de passe -->
		{!! link_to('password/reset', 'J\'ai oublié mon mot de passe !', ['class' => 'btn btn-warning pull-right']) !!}
		
	</div>
@stop					
 

