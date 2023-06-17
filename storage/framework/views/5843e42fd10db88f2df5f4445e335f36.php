<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<h1>Halaman edit</h1>
<div class="container">
    <form action="/update/<?php echo e($data->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Masukkan Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo e($data->nama); ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="alamat" class="form-control" id="alamat" name="alamat" value="<?php echo e($data->alamat); ?>">
        </div>
        <div class="mb-3">
            <label for="tgllhr" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgllhr" name="tgllhr" value="<?php echo e($data->date); ?>">
        </div>
        <button type="submit" class="btn btn-primary col-2">Edit</button>
    </form>
</div>
<?php /**PATH C:\Users\TUF GAMING\OneDrive\Desktop\Laravel\example-app\resources\views/edit.blade.php ENDPATH**/ ?>