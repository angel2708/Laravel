

<?php $__env->startSection('title', 'Crear película'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php $__env->startSection("content"); ?>

  <div class="row" style="margin-top:20px; justify-content:center;">

	<div class="col-md-offset-3 col-md-6">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Añadir juego
				</h3>
			</div>
			<div class="panel-body" style="padding:30px">
        		<form action="<?php echo e(route('games.store')); ?>" method="post">
					<?php echo csrf_field(); ?>
    				<div class="form-group">
  						<label for="title">Nombre</label>
  						<input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
					</div>
					<div class="form-group">
                    	<label for="year">Precio</label>
                    	<input type="text" name="precio" id="precio" class="form-control" placeholder="€">
					</div>
					<div class="form-group">
                    	<label for="poster">Poster</label>
                	    <input type="text" name="poster" id="poster" class="form-control" placeholder="URL Imagen">
					</div>
					<div class="form-group">
						<label for="synopsis">Descripción</label>
    					<textarea name="description" id="description" class="form-control" rows="3" placeholder="Breve descripción"></textarea>
					</div>
					<div class="form-group text-center">
						<button class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Añadir juego</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Proyectos_laravel/gamestore/resources/views/games/create.blade.php ENDPATH**/ ?>