<nav class="navbar navbar-default">
    <div class="container bg-light">

        <div class="navbar-header">
            <a class="btn" class="navbar-brand" href="<?php echo e(url('/home')); ?>">
                <h5 class="glyphicon glyphicon-tower" aria-hidden="true">Inicio</h5>
            </a>
        </div>

        <?php if( true || Auth::check() ): ?>
        <div class="navbar" id="bs-example-navbar-collapse-1">
            <a class="btn btn-primary mx-1" href="<?php echo e(route('games.index')); ?>">
                <span class="glyphicon glyphicon-film" aria-hidden="true">Catálogo</span>
            </a>
            <a class="btn btn-success mx-1" href="<?php echo e(route('games.create')); ?>">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true">Nuevo juego</span>
            </a>
            <a class="btn btn-danger mx-1" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>
        </div>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH /home/vagrant/Proyectos_laravel/gamestore/resources/views/partials/navbar.blade.php ENDPATH**/ ?>