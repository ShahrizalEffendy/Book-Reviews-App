

<?php $__env->startSection('content'); ?>
  <div class="mb-4">
    <h1 class="mb-2 text-2xl"><?php echo e($book->title); ?></h1>

    <div class="book-info">
      <div class="book-author mb-4 text-lg font-semibold">by <?php echo e($book->author); ?></div>
      <div class="book-rating flex items-center">
        <div class="mr-2 text-sm font-medium text-slate-700">
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
        <span class="book-review-count text-sm text-gray-500">
          <?php echo e($book->reviews_count); ?> <?php echo e(Str::plural('review', $book->reviews_count)); ?>

        </span>
      </div>
    </div>
  </div>

  <div class="mb-4">
    <a href="<?php echo e(route('books.reviews.create', $book)); ?>" class="reset-link">
      Add a review!</a>
  </div>

  <div>
    <h2 class="mb-4 text-xl font-semibold">Reviews</h2>
    <ul>
      <?php $__empty_1 = true; $__currentLoopData = $book->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li class="book-item mb-4">
          <div>
            <div class="mb-2 flex items-center justify-between">
              <div class="font-semibold">
              <?php if (isset($component)) { $__componentOriginal39f2763c88a2b6449e1e2b6e6a25d4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39f2763c88a2b6449e1e2b6e6a25d4ae = $attributes; } ?>
<?php $component = App\View\Components\StarRating::resolve(['rating' => $review->rating] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                <?php echo e($review->created_at->format('M j, Y')); ?></div>
            </div>
            <p class="text-gray-700"><?php echo e($review->review); ?></p>
          </div>
        </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <li class="mb-4">
          <div class="empty-book-item">
            <p class="empty-text text-lg font-semibold">No reviews yet</p>
          </div>
        </li>
      <?php endif; ?>
    </ul>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 14S\laravel course\book-review\resources\views/books/show.blade.php ENDPATH**/ ?>