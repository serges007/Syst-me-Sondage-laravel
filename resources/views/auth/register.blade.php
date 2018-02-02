@extends('template')

@section('contenu')
	<div class="col-sm-offset-3 col-sm-6">
		<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Inscrivez-vous !</div>
			<div class="panel-body"> 
				<!-- Formulaire de création -->
				{!! Form::open(['url' => 'register']) !!}	
					{!! Form::control('text', $errors, 'name', 'Nom') !!}
					{!! Form::control('email', $errors, 'email', 'Email') !!}
					{!! Form::password_bis($errors, 'password', 'Mot de passe') !!}
					{!! Form::password_bis($errors, 'password_confirmation', 'Confirmation mot de passe') !!}
					{!! Form::button_submit('Envoyer') !!}
				{!! Form::close() !!}
				<!-- Fin du formulaire -->
			</div>
		</div>

		<!-- Bouton de retour à la page précédente -->
		{!! Html::button_back() !!}
		
	</div>
@stop					
 

