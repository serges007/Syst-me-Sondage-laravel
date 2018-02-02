@extends('polls/template_form')

@section('form')
					{!! Form::open(['route' => 'poll.store', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}	
						<p><strong>Question</strong></p>
						{!! Form::control('text', $errors, 'question', 'Question') !!}
						<hr>
						<div id="answers">
					  		<p><strong>Réponses</strong></p>
							@for($i = 0; $i < 3; $i++)
								<div class="row ligne">
									<div class="form-group">
										<div class="col-md-10">
											{!! Form::text('answers[]', null, ['class' => 'form-control']) !!}
											<small class="help-block"></small>
										</div>
										<div class="col-md-2">
											<button type="button" class="btn btn-danger">Supprimer</button>
										</div>
									</div>
								</div>						
							@endfor
						</div><hr>
						<div class="row">
	  						<button id="add_answer" type="button" class="btn btn-primary pull-right">Ajouter une réponse</button>
	  					</div><hr>
	  					{!! Form::button_submit('Envoyer') !!}
					{!! Form::close() !!}
@stop