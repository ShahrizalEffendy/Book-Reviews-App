

<?php $__env->startSection('content'); ?>
    <h1 class="mb-10 text-2xl">Add Review for <?php echo e($book->title); ?></h1>

    <form method="POST" action="<?php echo e(route('books.reviews.store', $book)); ?>">
        <?php echo csrf_field(); ?>
        <label for="review">Review</label>
        <textarea name="review" id="review" required class="input mb-4"></textarea>

        <label for="rating">Rating</label>

        <select name="rating" id="rating" class="input mb-4" required>
            <option value="">Select a Rating</option>
            <?php for($i=1;$i<=5;$i++): ?>
                <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
            <?php endfor; ?>
        </select>

        <button type="submit" class="btn">Add Review</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 14S\laravel course\book-review\resources\views/books/reviews/create.blade.php ENDPATH**/ ?>