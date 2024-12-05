<?php $__env->startSection('title', 'Daftar Kategori Sampah'); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-white p-4 lg:p-6 rounded-md shadow-md w-full lg:w-xl">
        <h1 class="text-3xl lg:text-5xl font-bold mb-6">Kategori Sampah</h1>

        <!-- Tombol Tambah -->
        <div class="flex justify-end mb-4">
            <a href="<?php echo e(route('admin.categories.create')); ?>" class="bg-hulk text-white px-3 py-2 rounded hover:bg-old-hulk">
                Tambah Kategori
            </a>
        </div>

        <!-- Tabel Kategori -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Kategori Sampah</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="px-4 py-2 border"><?php echo e($category->id); ?></td>
                            <td class="px-4 py-2 border"><?php echo e($category->kategori); ?></td>
                            <td class="px-4 py-2 border flex space-x-2">
                                <!-- Tombol Edit -->
                                <a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>" class="bg-hulk text-white px-3 py-1 rounded hover:bg-old-hulk text-center">
                                    Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <button onclick="openOverlay(<?php echo e($category->id); ?>)" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-center">
                                    Hapus
                                </button>
                                <!-- Form untuk Hapus -->
                                <form id="delete-form-<?php echo e($category->id); ?>" action="<?php echo e(route('admin.categories.destroy', $category->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3" class="text-center py-4">Belum ada kategori.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            <?php echo e($categories->links()); ?>

        </div>
    </div>

    <!-- Overlay untuk Konfirmasi Hapus -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
            <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Kategori ini?</h2>
            <div class="flex justify-center space-x-4">
                <button id="confirm-delete-button" class="px-4 py-2 border border-hulk text-hulk rounded hover:bg-red-100">
                    Ya
                </button>
                <button onclick="closeOverlay()" class="px-4 py-2 border border-red-600 text-red-600 rounded hover:bg-green-100">
                    Tidak
                </button>
            </div>
        </div>
    </div>

    <script>
        let deleteCategoryId = null;

        // Buka Overlay
        function openOverlay(categoryId) {
            deleteCategoryId = categoryId;
            document.getElementById('overlay').classList.remove('hidden');
        }

        // Tutup Overlay
        function closeOverlay() {
            document.getElementById('overlay').classList.add('hidden');
            deleteCategoryId = null;
        }

        // Konfirmasi Hapus
        document.getElementById('confirm-delete-button').addEventListener('click', function () {
            if (deleteCategoryId) {
                document.getElementById(delete-form-${deleteCategoryId}).submit();
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php\FinalPoject_CycleTech\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>