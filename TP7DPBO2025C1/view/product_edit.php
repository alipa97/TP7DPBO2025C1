<?php
// Mengambil ID dari URL
$id = $_GET['id'];

// Mendapatkan data produk berdasarkan ID
$productData = $product->getProductById($id);

if (!$productData) {
    echo "<p class='text-red-600 text-center mt-4'>Data produk tidak ditemukan.</p>";
    exit;
}

// Mendapatkan daftar brand dan category dari tabel masing-masing
$brands = $brand->getAllBrands();
$categories = $category->getAllCategories();

// Proses update produk jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product->updateProduct($id, $_POST['name'], $_POST['brand'], $_POST['category'], $_POST['price'], $_POST['description']);
    header("Location: index.php?page=products");
    exit;
}
?>

<h3 class="w-full py-4 text-center text-xl text-sky-900">Edit Product</h3>

<form method="POST" class="max-w-md mx-auto space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Product Name</label>
        <input type="text" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2" value="<?= htmlspecialchars($productData['name']) ?>">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Brand</label>
        <select name="brand" required class="w-full border border-gray-300 rounded-lg px-4 py-2">
            <!-- Daftar brand yang sudah ada -->
            <?php foreach ($brands as $brandItem): ?>
                <option value="<?= $brandItem['id'] ?>" <?= ($productData['brand_id'] == $brandItem['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($brandItem['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Category</label>
        <select name="category" required class="w-full border border-gray-300 rounded-lg px-4 py-2">
            <!-- Daftar kategori yang sudah ada -->
            <?php foreach ($categories as $categoryItem): ?>
                <option value="<?= $categoryItem['id'] ?>" <?= ($productData['category_id'] == $categoryItem['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($categoryItem['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Price</label>
        <input type="number" name="price" required class="w-full border border-gray-300 rounded-lg px-4 py-2" value="<?= htmlspecialchars($productData['price']) ?>">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" required class="w-full border border-gray-300 rounded-lg px-4 py-2"><?= htmlspecialchars($productData['description']) ?></textarea>
    </div>

    <div class="text-right">
        <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm">Update</button>
    </div>
</form>
