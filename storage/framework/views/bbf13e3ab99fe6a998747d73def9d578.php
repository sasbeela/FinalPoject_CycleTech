<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl lg:text-5xl font-bold m-4 lg:m-6">Dashboard</h1>
    <div class="flex flex-col">
        <!-- Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 m-4 lg:m-0">
            <div class="bg-white p-4 shadow rounded-lg text-center border-solid border-2 border-hulk">
                <h2 class="text-lg font-medium">Total Pengguna</h2>
                <p class="mt-2 text-xl font-bold">X</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg text-center border-solid border-2 border-hulk">
                <h2 class="text-lg font-medium">Total Kreator</h2>
                <p class="mt-2 text-xl font-bold">X</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg text-center border-solid border-2 border-hulk">
                <h2 class="text-lg font-medium">Total Kreasi</h2>
                <p class="mt-2 text-xl font-bold">X</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php\FinalPoject_CycleTech\resources\views/admin/Dashboard/index.blade.php ENDPATH**/ ?>