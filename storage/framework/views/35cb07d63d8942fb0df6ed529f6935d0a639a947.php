<?php $__env->startSection('content'); ?>
<div class="site-cover site-cover-sm same-height overlay single-page"
    style="background-image: url('<?php echo e($post->image); ?>');">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="post-entry text-center">
                    <span class="post-category text-white bg-success mb-3"><?php echo e($post->category->name); ?></span>
                    <h1 class="mb-4"><a href="javascript:void()"><?php echo e($post->title); ?></a></h1>
                    <div class="post-meta align-items-center text-center">
                        <figure class="author-figure mb-0 mr-3 d-inline-block">
                            <img src="<?php if($post->user->image): ?> <?php echo e($post->user->image); ?> <?php else: ?> <?php echo e(asset('website/images/user.png')); ?> <?php endif; ?>" alt="Image" class="img-fluid">
                        </figure>
                        <span class="d-inline-block mt-1">By <?php echo e($post->user->name); ?></span>
                        <span>&nbsp;-&nbsp; <?php echo e($post->created_at->format('M d, Y')); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="site-section py-lg">
    <div class="container">
        <div class="row blog-entries element-animate">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="post-content-body">
                    <?php echo $post->description; ?>

                </div>
                <div class="pt-5">
                    <p>

                        Categories: <a href="#"><?php echo e($post->category->name); ?></a>
                        <?php if($post->tags()->count() > 0): ?>
                        Tags:
                            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('website.tag', ['slug' => $tag->slug])); ?>">#<?php echo e($tag->name); ?></a>,
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </p>
                </div>
                <div class="pt-5">

                    <a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>#disqus_thread">Comments</a>

                    <div id="disqus_thread"></div>


                    
                </div>

            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">








                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="<?php if($post->user->image): ?> <?php echo e($post->user->image); ?> <?php else: ?> <?php echo e(asset('website/images/user.png')); ?> <?php endif; ?>" alt="Image Placeholder"
                            class="img-fluid mb-5">
                        <div class="bio-body">
                            <h2><?php echo e($post->user->name); ?></h2>
                            <p class="mb-4"><?php echo e($post->user->description); ?></p>
                            <p><a href="<?php echo e(route('website.about')); ?>" class="btn btn-primary btn-sm rounded px-4 py-2">Мой профиль</a></p>
                            <p class="social">
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <h3 class="heading">Популярные посты</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="">
                                    <img src="<?php echo e($post->image); ?>" alt="Image placeholder"
                                        class="mr-4">
                                    <div class="text">
                                        <h4> <?php echo e($post->title); ?> </h4>
                                        <div class="post-meta">
                                            <span class="mr-2"> <?php echo e($post->created_at->format('M d, Y')); ?> </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Категории</h3>
                    <ul class="categories">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('website.category', ['slug' => $category->slug])); ?>"><?php echo e($category->name); ?> <span></span> </a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">Теги</h3>
                    <ul class="tags">
                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('website.tag', ['slug' => $tag->slug])); ?>"><?php echo e($tag->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <!-- END sidebar -->

        </div>
    </div>
</section>

<div class="site-section bg-light">
    <div class="container">

        <div class="row mb-5">
            <div class="col-12">
                <h2>Похожие посты</h2>
            </div>
        </div>

        <div class="row align-items-stretch retro-layout">

            <div class="col-md-5 order-md-2">
                <?php $__currentLoopData = $lastRelatedPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="single.html" class="hentry img-1 h-100 gradient"
                    style="background-image: url('<?php echo e($post->image); ?>');">
                    <span class="post-category text-white bg-danger"><?php echo e($post->category->name); ?></span>
                    <div class="text">
                        <h2><?php echo e($post->title); ?></h2>
                        <span><?php echo e($post->created_at->format('M d, Y')); ?></span>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="col-md-7">
                <?php $__currentLoopData = $firstRelatedPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="single.html" class="hentry img-2 v-height mb30 gradient"
                    style="background-image: url('<?php echo e($post->image); ?>');">
                    <span class="post-category text-white bg-success"><?php echo e($post->category->name); ?></span>
                    <div class="text text-sm">
                        <h2><?php echo e($post->title); ?></h2>
                        <span><?php echo e($post->created_at->format('M d, Y')); ?></span>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="two-col d-block d-md-flex justify-content-between">
                    <?php $__currentLoopData = $firstRelatedPosts2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('website.post', ['slug' => $post->slug])); ?>" class="hentry v-height img-2 gradient"
                        style="background-image: url('<?php echo e($post->image); ?>');">
                        <span class="post-category text-white bg-primary"><?php echo e($post->category->name); ?></span>
                        <div class="text text-sm">
                            <h2><?php echo e($post->title); ?></h2>
                            <span><?php echo e($post->created_at->format('M d, Y')); ?></span>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

    </div>
</div>


















<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://laravel-blog-wzwtbmiezy.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<script id="dsq-count-scr" src="//laravel-blog-wzwtbmiezy.disqus.com/count.js" async></script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\laravel-blog-coursework\resources\views/website/post.blade.php ENDPATH**/ ?>