<?php if(count($errors) > 0): ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<ul>
  			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
  				<li><?php echo $error; ?></li>
  			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  		</ul>
  	</div>
<?php endif; ?>