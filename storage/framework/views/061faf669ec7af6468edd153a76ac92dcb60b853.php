
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php $__env->startSection('title', 'Crear Proyecto'); ?>
<?php $__env->startSection('content'); ?>
<h1>Editar Juego</h1> 
<?php if($errors->any()): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li> <?php echo e($error); ?> </li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<form method="post" action="<?php echo e(route('games.update', $juego)); ?>">
    <?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?>
    <label>
        Nombre <br>
        <input type="text" name ="name" value="<?php echo e($juego->name); ?>"> 
    </label>
    <br>
    <label>
        Precio <br>
        <input type="text" name ="precio" value="<?php echo e($juego->precio); ?>">
    </label>
    <br>
    <label>
        Poster <br>
        <input type="text" name ="poster" value="<?php echo e($juego->poster); ?>">
    </label>
    <br>
    <label>
        Resumen <br>
        <textarea name ="description" ><?php echo e($juego->description); ?></textarea>
    </label>
    <br>
    <button>Actualizar</button>
</form>

<?php $__env->stopSection(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/Proyectos_laravel/gamestore/resources/views/games/edit.blade.php ENDPATH**/ ?>