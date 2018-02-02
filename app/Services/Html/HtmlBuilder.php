<?php

namespace App\Services\Html;

use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder
{

	public function button_back()
	{
		return '<a href="javascript:history.back()" class="btn btn-primary">
				<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
			</a>';
	}

	public function progress($total, $result)
	{
		$pourcentage = $total == 0 ? 0 : number_format($result / $total * 100);
		return	'<div class="progress">
				<div class="progress-bar progress-bar-success" style="width: ' . $pourcentage . '%;">' .
					$pourcentage . ' %
				</div>
			</div>';
	}			

}
