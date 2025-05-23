<?php
require_once 'views/template/header.php';
?>

<div class="bg-white rounded-lg shadow-md p-6 max-w-md mx-auto">
    <h2 class="text-2xl font-bold mb-4 text-pink-600">
        <?php echo isset($brand) ? 'Edit Brand' : 'Tambah Brand'; ?>
    </h2>
    <form action="index.php?entity=brand&action=<?php echo isset($brand) ? 'update&id=' . $brand['id'] : 'save'; ?>" 
          method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700 font-medium mb-2">Nama Brand:</label>
            <input type="text" name="name" 
                   value="<?php echo isset($brand) ? htmlspecialchars($brand['name']) : ''; ?>" 
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-pink-500" 
                   required>
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-2">Negara:</label>
            <input type="text" name="country" 
                   value="<?php echo isset($brand) ? htmlspecialchars($brand['country']) : ''; ?>" 
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-pink-500">
        </div>
        <div class="flex space-x-2">
            <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded">
                Simpan
            </button>
            <a href="index.php?entity=brand" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                Kembali
            </a>
        </div>
    </form>
</div>

<?php
require_once 'views/template/footer.php';
?>