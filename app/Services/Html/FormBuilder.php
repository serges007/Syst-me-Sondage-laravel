<?php

namespace App\Services\Html;

use Collective\Html\FormBuilder as CollectiveFormbuilder;
use Request;

class FormBuilder extends CollectiveFormbuilder
{

	public function control($type, $errors, $nom, $placeholder = '', $valeur = null)
	{
		$valeur = Request::old($nom) ? Request::old($nom) : $valeur;
		$attributes = ['class' => 'form-control', 'placeholder' => $placeholder];
		return sprintf('
			<div class="form-group %s">
				%s
				<small class="help-block">%s</small>
			</div>',
			$errors->has($nom) ? 'has-error' : '',
			call_user_func_array(['Form', $type], [$nom, $valeur, $attributes]),
			$errors->first($nom)
		);
	}	

	public function password_bis($errors, $nom, $placeholder = '')
	{
		$attributes = ['class' => 'form-control', 'placeholder' => $placeholder];
		return sprintf('
			<div class="form-group %s">
				%s
				<small class="help-block">%s</small>
			</div>',
			$errors->has($nom) ? 'has-error' : '',
			parent::password($nom, ['class' => 'form-control', 'placeholder' => $placeholder]),
			$errors->first($nom)
		);
	}

	public function checkbox_bis($nom, $texte)
	{
		return sprintf('
			<div class="checkbox">
				<label>
					%s %s
				</label>
			</div>',
			parent::checkbox($nom),
			$texte
		);
	}	

	public function button_submit($texte)
	{
		return parent::submit($texte, ['class' => 'btn btn-primary pull-right']);
	}		

}
