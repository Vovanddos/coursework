<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Laravel-Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/style.css">
    <style>
      .pagination {
        margin-bottom: 0 !important;
      }
    </style>
  </head>
  <body>

  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <header class="site-navbar" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-12 search-form-wrap js-search-form" style="margin-top: 200px">
            <form method="get" action="<?php echo e(route('search')); ?>">
              <input type="text" id="s" name="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          <div class="col-4 site-logo">
            <a href="<?php echo e(route('website')); ?>" class="text-black h2 mb-0">Laravel-Blog</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route('website.category', ['slug' => $category->slug])); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <div class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4">Обо мне</h3>
            <p><?php echo e($setting->description); ?> </p>
          </div>
          <div class="col-md-3 ml-auto">
            <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
            <ul class="list-unstyled float-left mr-5">
              <li><a href="<?php echo e(route('website')); ?>">Главная</a></li>
              <li><a href="<?php echo e(route('website.about')); ?>">Обо мне</a></li>
              <li><a href="<?php echo e(route('website.contact')); ?>">Контакты</a></li>
            </ul>
            <ul class="list-unstyled float-left">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route('website.category', ['slug' => $category->slug])); ?>"><?php echo e($category->name); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <div class="col-md-4">
            <div>
              <h3 class="footer-heading mb-4">Свяжитесь со мной</h3>
              <p>
                  <?php if($setting->facebook): ?> <a href="#"><?php echo e($setting->facebook); ?></a><br> <?php endif; ?>
                  <?php if($setting->twitter): ?><a href="#"><?php echo e($setting->twitter); ?></a><br> <?php endif; ?>
                  <?php if($setting->instagram): ?><a href="#"><?php echo e($setting->instagram); ?></a><br>  <?php endif; ?>
                  <?php if($setting->reddit): ?><a href="#"><?php echo e($setting->reddit); ?></a><br> <?php endif; ?>
                  <?php if($setting->email): ?><a href="#"><?php echo e($setting->email); ?></a><br> <?php endif; ?>
                      <?php if($setting->phone): ?><a href="#"><?php echo e($setting->phone); ?></a><br> <?php endif; ?>






              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
                <?php echo e($setting->copyright); ?></a>
              <div class="mb-0">Developed By Vovanddos </div>
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?php echo e(asset('website')); ?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery-ui.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/popper.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery.countdown.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo e(asset('website')); ?>/js/aos.js"></script>

  <script src="<?php echo e(asset('website')); ?>/js/main.js"></script>
  <?php echo $__env->yieldContent('script'); ?>
  </body>
</html>
<?php /**PATH W:\domains\laravel-blog-coursework\resources\views/layouts/website.blade.php ENDPATH**/ ?>