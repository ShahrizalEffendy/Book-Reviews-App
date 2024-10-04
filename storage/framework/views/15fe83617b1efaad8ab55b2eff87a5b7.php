

<?php $__env->startSection('content'); ?>
    <h1 class="mb-10 text-2xl">Books</h1>

    <form method="GET" action="<?php echo e(route('books.index')); ?> " class="mb-4 flex items-center gap-x-2">
        <input type="text" name="title" placeholder="Search by title"
        value="<?php echo e(request('title')); ?>" class="input h-10"/>
        <input type="hidden" name="filter" value="<?php echo e(request('filter')); ?>"/>
        <button type="submit" class="btn h-10">Search</button>
        <a href="<?php echo e(route('books.index')); ?>" class="btn h-10">Clear</a>
    </form>

    <div class="filter-container mb-4 flex">
        <?php
            $filters = [
            ''=>'Latest',
            'popular_last_month'=>'Popular Last Month',
            'popular_last_6months'=>'Popular Last 6 Months',
            'highest_rated_last_month'=>'Highest Rated Last Month',
            'highest_rated_last_6months'=>'Highest Rated Last 6 Months',
            ]
        ?>

        <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('books.index', [...request()->query(),'filter'=>$key])); ?>" 
                class="<?php echo e(request('filter') === $key || (request('filter') === null && $key === '') ? 'filter-item-active' : 'filter-item'); ?>">
                    <?php echo e($label); ?>

                </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <ul>
        <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="mb-4">
                <div class="book-item">
                    <div
                        class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a href="<?php echo e(route('books.show', $book)); ?>" class="book-title"><?php echo e($book->title); ?></a>
                            <span class="book-author">by <?php echo e($book->author); ?></span>
                        </div>
                        <div>
                            <div class="book-rating">
                                <?php if (isset($component)) { $__componentOriginal39f2763c88a2b6449e1e2b6e6a25d4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39f2763c88a2b6449e1e2b6e6a25d4ae = $attributes; } ?>
<?php $component = App\View\Components\StarRating::resolve(['rating' => $book->reviews_avg_rating] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('star-rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StarRating::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39f2763c88a2b6449e1e2b6e6a25d4ae)): ?>
<?php $attributes = $__attributesOriginal39f2763c88a2b6449e1e2b6e6a25d4ae; ?>
<?php unset($__attributesOriginal39f2763c88a2b6449e1e2b6e6a25d4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39f2763c88a2b6449e1e2b6e6a25d4ae)): ?>
<?php $component = $__componentOriginal39f2763c88a2b6449e1e2b6e6a25d4ae; ?>
<?php unset($__componentOriginal39f2763c88a2b6449e1e2b6e6a25d4ae); ?>
<?php endif; ?>
                            </div>
                            <div class="book-review-count">
                                out of <?php echo e($book->reviews_count); ?> <?php echo e(Str::plural('review',$book->reviews_count)); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="mb-4">
                <div class="empty-book-item">
                    <p class="empty-text">No books found</p>
                    <a href="<?php echo e(route('books.index')); ?>" class="reset-link">Reset criteria</a>
                </div>
            </li>
        <?php endif; ?>
            
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 14S\laravel course\book-review\resources\views/books/index.blade.php ENDPATH**/ ?>