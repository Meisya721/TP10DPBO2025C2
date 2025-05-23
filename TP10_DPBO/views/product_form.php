<?php
require_once 'views/template/header.php';
?>

<div class="bg-white rounded-lg shadow-md p-6 max-w-lg mx-auto">
    <h2 class="text-2xl font-bold mb-4 text-pink-600">
        <?php echo isset($product) ? 'Edit Produk' : 'Tambah Produk'; ?>
    </h2>
    <form action="index.php?entity=product&action=<?php echo isset($product) ? 'update&id=' . $product['id'] : 'save'; ?>" 
          method="POST" class="space-y-4">
        <div>
            <label class="block text-gray-700 font-medium mb-2">Nama Produk:</label>
            <input type="text" name="name" 
                   value="<?php echo isset($product) ? htmlspecialchars($product['name']) : ''; ?>" 
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-pink-500" 
                   required>
            </div>
        
        <div>
            <label class="block text-gray-700 font-medium mb-2">Kategori:</label>
            <select name="category_id" 
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-pink-500" 
                    required>
                <option value="">Pilih Kategori</option>
                <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id']; ?>" 
                        <?php echo (isset($product) && $product['category_id'] == $category['id']) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($category['name']); ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div>
            <label class="block text-gray-700 font-medium mb-2">Brand:</label>
            <select name="brand_id" 
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-pink-500" 
                    required>
                <option value="">Pilih Brand</option>
                <?php foreach ($brands as $brand): ?>
                <option value="<?php echo $brand['id']; ?>" 
                        <?php echo (isset($product) && $product['brand_id'] == $brand['id']) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($brand['name']); ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 font-medium mb-2">Harga:</label>
                <input type="number" name="price" step="0.01" min="0"
                       value="<?php echo isset($product) ? $product['price'] : ''; ?>" 
                       class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-pink-500" 
                       required>
            </div>
        <div>
            <label class="block text-gray-700 font-medium mb-2">Stok:</label>
            <input type="number" name="stock" min="0"
               value="<?php echo isset($product) ? $product['stock'] : ''; ?>" 
               class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-pink-500" 
               required>
    </div>
        </div>

        
        <div class="flex space-x-2">
            <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded">
                Simpan
            </button>
            <a href="index.php?entity=product" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                Kembali
            </a>
        </div>
    </form>
</div>

<?php
require_once 'views/template/footer.php';
?>