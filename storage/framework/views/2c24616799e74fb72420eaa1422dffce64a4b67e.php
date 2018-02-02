<?php $__env->startSection('contenu'); ?>
  <br>
	<div class="col-sm-offset-3 col-sm-6">

		<!-- Affichage des alertes -->	
		<?php if(session()->has('info')): ?>
			<div class="alert alert-success"><?php echo e(session('info')); ?></div>
		<?php endif; ?>

		<div class="panel panel-primary">

			<div class="panel-heading">
				<h3 class="panel-title">Liste des sondages</h3>
			</div>

			<table class="table">

					<!-- Balayage de tous les sondages -->		
					<?php foreach($polls as $poll): ?>
						<tr>
							<td class="text-primary"><strong><?php echo e($poll->question); ?></strong></td>
							<td>
								<?php echo link_to_route('poll.show', 'Voir', [$poll->id], ['class' => 'btn btn-success btn-block']); ?>

							</td>
							<?php if(auth()->check() && auth()->user()->admin): ?>
								<td>
									<?php echo link_to_route('poll.edit', 'Modifier', [$poll->id], ['class' => 'btn btn-warning btn-block' . (in_array($poll->question, $polls_voted)? ' disabled' : '')]); ?>

								</td>
								<td>
									<?php echo Form::open(['method' => 'DELETE', 'route' => ['poll.destroy', $poll->id]]); ?>

										<?php echo Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Voulez-vous vraiment supprimer ce sondage ?\')']); ?>

									<?php echo Form::close(); ?>

								</td>
							<?php endif; ?>
						</tr>
					<?php endforeach; ?>
					<!-- Fin du balayage -->

			</table>

		</div>
		<?php if(auth()->check() && auth()->user()->admin): ?>
			<?php echo link_to_route('poll.create', 'Ajouter un sondage', null, ['class' => 'btn btn-info pull-right']); ?>

		<?php endif; ?>

		<!-- Pagination -->
		<?php echo $polls->render();; ?>

		
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>