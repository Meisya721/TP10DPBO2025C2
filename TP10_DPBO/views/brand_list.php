<?php
require_once 'views/template/header.php';
?>

<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-4 text-pink-600">Daftar Brand</h2>
    <a href="index.php?entity=brand&action=add" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded mb-4 inline-block">
        Tambah Brand
    </a>
    <div class="overflow-x-auto">
        <table class="w-full border border-gray-300 rounded-lg">
            <thead>
                <tr class="bg-pink-100">
                    <th class="border border-gray-300 p-3 text-center">Nama Brand</th>
                    <th class="border border-gray-300 p-3 text-center">Negara</th>
                    <th class="border border-gray-300 p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($brandList as $brand): ?>
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 p-3 font-medium"><?php echo htmlspecialchars($brand['name']); ?></td>
                    <td class="border border-gray-300 p-3"><?php echo htmlspecialchars($brand['country']); ?></td>
                    <td class="border border-gray-300 p-3 text-center">
                        <a href="index.php?entity=brand&action=edit&id=<?php echo $brand['id']; ?>" 
                           class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                        <a href="index.php?entity=brand&action=delete&id=<?php echo $brand['id']; ?>" 
                           class="text-red-500 hover:text-red-700" 
                           onclick="return confirm('Yakin ingin menghapus brand ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once 'views/template/footer.php';
?>