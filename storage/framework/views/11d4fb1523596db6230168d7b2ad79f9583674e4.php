<?php $__env->startSection('contenu'); ?>
	<div class="col-sm-offset-3 col-sm-6">
		<br>
		<?php if(session('status')): ?>
			<div class="alert alert-success"><?php echo e(session('status')); ?></div>
		<?php else: ?>
			<div class="panel panel-primary">	
				<div class="panel-heading">Oubli du mot de passe, entrez votre email :</div>
				<div class="panel-body"> 
					<div class="col-sm-12">
						<?php echo Form::open(['url' => 'password/email']); ?>	
							<?php echo Form::control('email', $errors, 'email', 'Email'); ?>

							<?php echo Form::button_submit('Envoyer'); ?>

						<?php echo Form::close(); ?>

					</div>
				</div>
			</div>
			<?php echo Html::button_back(); ?>		
		<?php endif; ?>
	</div>
<?php $__env->stopSection(); ?>					
 


<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>