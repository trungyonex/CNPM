<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title>TTT</title>

    <!-- CDN Outsider -->
    <link rel="stylesheet" href="<?php echo e(asset('https://fonts.googleapis.com/icon?family=Material+Icons')); ?>">
    <script defer src="<?php echo e(asset('https://code.getmdl.io/1.3.0/material.min.js')); ?>"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-pink.min.css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/mdlui.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/appsys.css')); ?>" rel="stylesheet">

</head>
<body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">

                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
                    <i class="material-icons">messenger</i>
                </button>
                <div class="mdl-layout-spacer"></div>

                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">home</i>
                </button>

                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">notifications</i>
                </button>

                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">info</i>
                </button>

                <button class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">lock</i>
                </button>

            </div>
        </header>
        <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">
                <img src="Image/logo.png" class="demo-avatar" style="background-color: #BBBBBB;">
                <div class="demo-avatar-dropdown">
                <span style="font-size: 24px">
                    <?php if(auth()->guard()->check()): ?>
                        <?php echo e(Auth::user()->name); ?>

                    <?php endif; ?>
                </span>
                <div class="mdl-layout-spacer"></div>

                </div>
            </header>
            <ul class="demo-list-item mdl-list">
                <?php if(auth()->guard()->guest()): ?>
                    <li class="mdl-list__item">
                        <a href="<?php echo e(route('login')); ?>" style="width: 100%">
                            <button class="mdl-button mdl-js-button mdl-button--raised m-md-0" style="width: 100%">
                                <?php echo e(__('Login')); ?>

                            </button>
                        </a>
                    </li>
                    <?php if(Route::has('register')): ?>
                    <li class="mdl-list__item">
                        <a href="<?php echo e(route('register')); ?>" style="width: 100%">
                            <button class="mdl-button mdl-js-button mdl-button--raised m-md-0" style="width: 100%" >
                                <?php echo e(__('Register')); ?>

                            </button>
                        </a>
                    </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="mdl-list__item">
                        <a href="<?php echo e(route('logout')); ?>" style="width: 100%" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <button class="mdl-button mdl-js-button mdl-button--raised ml-auto" style="width: 100%">
                                <?php echo e(__('Logout')); ?>

                            </button>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>

                    </li>
                <?php endif; ?>
            </ul>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">

                <?php if(Auth::check()): ?>
                    <?php if(Auth::user()->hasRole(['admin'])): ?>
                        <?php echo $__env->make('roles.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                    <?php if(Auth::user()->hasRole(['manager'])): ?>
                        <?php echo $__env->make('roles.manager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                    <?php if(Auth::user()->hasRole(['staff'])): ?>
                        <?php echo $__env->make('roles.staff', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                    <?php if(Auth::user()->hasRole(['renter'])): ?>
                        <?php echo $__env->make('roles.renter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                    <?php if(Auth::user()->hasRole(['owner'])): ?>
                        <?php echo $__env->make('roles.owner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                <?php endif; ?>

            </nav>
        </div>
        <main class="mdl-layout__content mdl-color--grey-100">
            <div>
                <div class="py-4 px-4">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\local\TrungProject\resources\views/home.blade.php ENDPATH**/ ?>