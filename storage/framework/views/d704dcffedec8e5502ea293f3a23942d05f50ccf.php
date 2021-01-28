


<?php $__env->startSection('contenu'); ?>

    <div>
        <?php $__currentLoopData = $utilisateur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utilisateurs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <?php echo e($utilisateurs->id); ?> 
                <?php echo e($utilisateurs->name); ?>

            </div>
            <button type="submit">delete tout les utilisateurs</button>
            <?php echo e($utilisateurs->forceDelete()); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adrie\ynov\resources\views/view_profile.blade.php ENDPATH**/ ?>