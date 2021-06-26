<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Создать пост</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('website')); ?>">На сайт</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('post.index')); ?>">Список постов</a></li>
                    <li class="breadcrumb-item active">Создать пост</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Создать пост</h3>
                            <a href="<?php echo e(route('post.index')); ?>" class="btn btn-primary">К списку постов</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                                <form action="<?php echo e(route('post.store')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="card-body">
                                        <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <div class="form-group">
                                            <label for="title">Название</label>
                                            <input type="name" name="title" value="<?php echo e(old('title')); ?>" class="form-control" placeholder="Введите название">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Категория</label>

                                            <select name="category" id="category" class="form-control">
                                                <option value="" style="display: none" selected>Выбрать категорию</option>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($c->id); ?>"> <?php echo e($c->name); ?> </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Изображение</label>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="image">
                                                <label class="custom-file-label" for="image">Выбрать файл</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Выбрать теги</label>
                                            <div class=" d-flex flex-wrap">
                                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="custom-control custom-checkbox" style="margin-right: 20px">
                                                    <input class="custom-control-input" name="tags[]" type="checkbox" id="tag<?php echo e($tag->id); ?>" value="<?php echo e($tag->id); ?>">
                                                    <label for="tag<?php echo e($tag->id); ?>" class="custom-control-label"><?php echo e($tag->name); ?></label>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Описание</label>
                                            <textarea name="description" id="description" rows="4" class="form-control"
                                                placeholder="Enter description"><?php echo e(old('description')); ?></textarea>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-lg btn-primary">Создать пост</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/admin/css/summernote-bs4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('/admin/js/summernote-bs4.min.js')); ?>"></script>
    <script>
        $('#description').summernote({
            placeholder: 'Начните писать...',
            tabsize: 2,
            height: 300
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\laravel-blog-coursework\resources\views/admin/post/create.blade.php ENDPATH**/ ?>