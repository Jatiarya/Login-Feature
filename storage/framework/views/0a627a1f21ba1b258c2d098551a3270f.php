<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <form action="/daftar" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Masukkan Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="alamat" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <label for="tgllhr" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgllhr" name="tgllhr">
        </div>
        <button type="submit" class="btn btn-info col-2">Daftar Pegawai</button>
    </form>
</div>
<?php /**PATH C:\Users\TUF GAMING\OneDrive\Desktop\Laravel\example-app\resources\views/daftar.blade.php ENDPATH**/ ?>