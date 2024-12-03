<?php $__env->startSection('title', 'Kreasi'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Container for content -->
    <div class="bg-white p-4 sm:p-6 rounded-md shadow-md max-w-full mx-auto">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold m-4 sm:m-6 text-center md:text-left">Data Kreasi</h1>

        <?php if(session('success')): ?>
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p><?php echo e(session('success')); ?></p>
            </div>
        <?php endif; ?>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-hulk text-xs sm:text-sm md:text-base">
                <thead>
                    <tr class="bg-green-100 text-left">
                        <th class="px-2 sm:px-4 py-2 border border-hulk">ID</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Author</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Kategori Kreasi</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Judul Kreasi</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Foto Kreasi</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $kreasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kreasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-2 sm:px-4 py-2 border border-hulk"><?php echo e($kreasi->id); ?></td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk"><?php echo e($kreasi->author); ?></td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk"><?php echo e($kreasi->kategori_kreasi); ?></td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk"><?php echo e($kreasi->judul_kreasi); ?></td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">
                                <?php if($kreasi->foto_kreasi): ?>
                                    <img src="<?php echo e(asset('storage/' . $kreasi->foto_kreasi)); ?>" alt="Foto Kreasi" class="h-20 w-auto mx-auto">
                                <?php else: ?>
                                    Tidak ada foto
                                <?php endif; ?>
                            </td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk flex justify-center space-x-2">
                                <!-- Tombol untuk menampilkan overlay -->
                                <button onclick="openOverlay(<?php echo e($kreasi->id); ?>)" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <!-- Navigasi Pagination -->
        <div class="mt-4">
            <?php echo e($kreasis->links('pagination::tailwind')); ?>

        </div>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <!-- Dialog Box -->
        <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
            <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Kreasi ini?</h2>
            <!-- Form Penghapusan -->
            <form id="deleteForm" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <div class="flex justify-center space-x-4">
                    <button type="submit" class="px-4 py-2 border border-hulk text-hulk rounded hover:bg-red-100">
                        Ya
                    </button>
                    <button type="button" onclick="closeOverlay()" class="px-4 py-2 border border-red-600 text-red-600 rounded hover:bg-green-100">
                        Tidak
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Buka overlay dan atur action pada form
        function openOverlay(id) {
            const overlay = document.getElementById('overlay');
            const deleteForm = document.getElementById('deleteForm');

            deleteForm.action = `/admin/kreasi/${id}`;
            overlay.classList.remove('hidden');
        }

        // Tutup overlay
        function closeOverlay() {
            const overlay = document.getElementById('overlay');
            overlay.classList.add('hidden');
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php\FinalPoject_CycleTech\resources\views/admin/Kreasi/index.blade.php ENDPATH**/ ?>