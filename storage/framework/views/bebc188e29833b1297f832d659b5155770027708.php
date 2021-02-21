
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php $__env->startSection('title', 'Ver película'); ?>
<?php $__env->startSection("content"); ?>

  <div class="row">
    <div class="col-sm-4">
     <img src="<?php echo e($juego->poster); ?>" style="height:400px; width: 350px;"/>
    </div>
    <div class="col-sm-8">
    <h1><?php echo e($juego->name); ?></h1>
    <h3>Precio: <?php echo e($juego->precio); ?>€</h2>

    <p>
      <h4>
        <span style="font-weight: bold;">Resumen:</span> <?php echo e($juego->description); ?>

      </h4>
    </p>

    <p>  
      <a class="btn btn-success" href=" <?php echo e(route('games.edit', $juego)); ?>">Editar Juego</a>
      <button type="button" class="btn btn-default"><a class="glyphicon glyphicon-chevron-left" aria-hidden="true" href="<?php echo e(route ('games.index')); ?>">Volver al listado</a></button>
      <form method="POST" action="<?php echo e(route('games.destroy',$juego)); ?>">
        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
        <button class="btn btn-danger">Eliminar</button>
      </form>

    </p>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Proyectos_laravel/gamestore/resources/views/games/show.blade.php ENDPATH**/ ?>