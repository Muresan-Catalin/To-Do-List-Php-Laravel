
<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
    <p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
<div class="panel panel-default">
    <div class="panel-heading">
        Lista sarcinilor
    </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="pull-right">
                <a href="/tasks/create" class="btn btn-default">Adaugare
                    Sarcina Noua</a>
            </div>
        </div>
        <table class="table table-bordered table-stripped">
            <tr>
                <th width="20">No</th>
                <th>Titlu</th>
                <th>Descriere</th>
                <th width="300">Actiune</th>
            </tr>
            <?php if(count($tasks) > 0): ?>
            <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($task->name); ?></td>
                <td><?php echo e($task->description); ?></td>
                <td>
                    <a class="btn btn-success" href="<?php echo e(route('tasks.show',$task->id)); ?>">Vizualizare</a>
                    <a class="btn btn-primary" href="<?php echo e(route('tasks.edit',$task->id)); ?>">Modificare</a>
                    <?php echo e(Form::open(['method' => 'DELETE','route' =>
['tasks.destroy', $task->id],'style'=>'display:inline'])); ?>

                    <?php echo e(Form::submit('Delete', ['class' => 'btn btndanger'])); ?>

                    <?php echo e(Form::close()); ?>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <tr>
                <td colspan="4">Nu exista sarcini!</td>
            </tr>
            <?php endif; ?>
        </table>
        <!-- Introduce nr pagina -->
        <?php echo e($tasks->render()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app\resources\views/tasks/list.blade.php ENDPATH**/ ?>