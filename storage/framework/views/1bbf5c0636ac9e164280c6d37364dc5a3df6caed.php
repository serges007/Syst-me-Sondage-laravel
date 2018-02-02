<?php $__env->startSection('contenu'); ?>
	<div class="col-sm-offset-3 col-sm-6">
		<br>
		<?php if(session('error')): ?>
			<div class="alert alert-danger"><?php echo e(session('error')); ?></div>
		<?php endif; ?>		
		<div class="panel panel-primary">	
			<div class="panel-heading">Connectez-vous !<?php echo link_to('register', 'Je m\'inscris !', ['class' => 'btn btn-info btn-xs pull-right']); ?></div>
			<div class="panel-body"> 

				<!-- Formulaire de login -->
				<?php echo Form::open(['url' => 'login']); ?>	
					<?php echo Form::control('email', $errors, 'email', 'Email'); ?>

					<?php echo Form::password_bis($errors, 'password', 'Mot de passe'); ?>

					<?php echo Form::checkbox_bis('remember', 'Se rappeler de moi'); ?>

					<?php echo Form::button_submit('Envoyer'); ?>

				<?php echo Form::close(); ?>

				<!-- Fin du formulaire -->

			</div>
		</div>

		<!-- Bouton de retour à la page précédente -->
		<?php echo Html::button_back(); ?>


		<!-- Bouton pour l'oubli du mot de passe -->
		<?php echo link_to('password/reset', 'J\'ai oublié mon mot de passe !', ['class' => 'btn btn-warning pull-right']); ?>

		
	</div>
<?php $__env->stopSection(); ?>					
 


<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>