@extends('template')

@section('contenu')
	<div class="col-sm-offset-3 col-sm-6">
		<br>
		@if(session('status'))
			<div class="alert alert-success">{{ session('status') }}</div>
		@else
			<div class="panel panel-primary">	
				<div class="panel-heading">Oubli du mot de passe, entrez votre email :</div>
				<div class="panel-body"> 
					<div class="col-sm-12">
						{!! Form::open(['url' => 'password/email']) !!}	
							{!! Form::control('email', $errors, 'email', 'Email') !!}
							{!! Form::button_submit('Envoyer') !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			{!! Html::button_back() !!}		
		@endif
	</div>
@stop					
 

