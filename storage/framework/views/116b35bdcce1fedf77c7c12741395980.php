<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo e(isset($title) ? $title : 'Dashboard'); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" type="image/png" href="https://images2.thanhnien.vn/528068263637045248/2024/1/25/e093e9cfc9027d6a142358d24d2ee350-65a11ac2af785880-17061562929701875684912.jpg">



    <?php echo $__env->make('frontend.layout.partials.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        table tr td:last-child {
            text-align: center;
        }

        #categoryTable,
        #originTable {
            width: 100% !important;
        }
    </style>
</head>

<body>
    <section class="app">
        <header class="site_header">
            <?php echo $__env->make('frontend.layout.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('frontend.layout.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>

        </div>
        <section class="site_content">
            <div class="breadcrumbs gray_bg">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item d-sm-inline"><a href="../index.html">
                                    <i class="fa fa-home"></i>
                                    <span class="d-none d-sm-inline-block">Trang chủ</span>
                                </a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $__env->yieldContent('title'); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </section>
        <footer class="site_footer mt-5">

            <?php echo $__env->make('frontend.layout.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>
    </section>

    <?php echo $__env->make('frontend.layout.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\vietserver\resources\views/frontend/layout/master.blade.php ENDPATH**/ ?>