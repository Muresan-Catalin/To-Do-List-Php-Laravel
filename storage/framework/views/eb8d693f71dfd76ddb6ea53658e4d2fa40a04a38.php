
<?php $__env->startSection('content'); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        View Task
    </div>
    <div class="panel-body">
        <div class="pull-right">
            <a class="btn btn-default" href="<?php echo e(route('tasks.index')); ?>">Inapoi</a>
        </div>
        <div class="form-group">
            <strong>Nume: </strong> <?php echo e($task->name); ?>

        </div>
        <div class="form-group">
            <strong>Descriere: </strong> <?php echo e($task->description); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/tasks/show.blade.php ENDPATH**/ ?>