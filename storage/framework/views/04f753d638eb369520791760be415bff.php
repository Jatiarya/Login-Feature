<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="css/dashboard.css">
<div class="container">
    <?php if(session('success')): ?>
        <div class="alert alert-info" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <?php if(session('delete')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo e(session('delete')); ?>

        </div>
    <?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($items->id); ?></th>
                    <td><?php echo e($items->nama); ?></td>
                    <td><?php echo e($items->alamat); ?></td>
                    <td><?php echo e($items->tgllhr); ?></td>
                    <td class="btn-action">
                        <a class="btn btn-info" href="/edit/<?php echo e($items->id); ?>">Edit</a>
                        <a class="btn btn-info" href="/delete/<?php echo e($items->id); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Users\TUF GAMING\OneDrive\Desktop\Laravel\example-app\resources\views/home.blade.php ENDPATH**/ ?>