<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $brand_id = $_POST['brand_id'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $product->createProduct($name, $brand_id, $category_id, $price, $description);
    header("Location: index.php?page=products");
    exit;
}
?>

<h3 class="w-full py-4 text-center text-xl text-sky-900">Create Product</h3>

<form method="POST" class="max-w-md mx-auto space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Product Name</label>
        <input type="text" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2">
    </div>
    
    <div>
        <label class="block text-sm font-medium text-gray-700">Brand</label>
        <select name="brand_id" required class="w-full border border-gray-300 rounded-lg px-4 py-2">
            <option value="">Select Brand</option>
            <?php foreach ($brand->getAllBrands() as $b): ?>
                <option value="<?= $b['id'] ?>"><?= htmlspecialchars($b['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    
    <div>
        <label class="block text-sm font-medium text-gray-700">Category</label>
        <select name="category_id" required class="w-full border border-gray-300 rounded-lg px-4 py-2">
            <option value="">Select Category</option>
            <?php foreach ($category->getAllCategories() as $c): ?>
                <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Price</label>
        <input type="number" name="price" required class="w-full border border-gray-300 rounded-lg px-4 py-2">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2"></textarea>
    </div>

    <div class="text-right">
        <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm">Save</button>
    </div>
</form>