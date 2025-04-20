<h3 class="w-full py-4 text-center text-xl text-sky-900">Product</h3>

<div class="mb-4 text-center">
    <a href="?page=product_create" class="bg-cyan-700 hover:bg-cyan-800 text-white px-4 py-2 rounded-lg text-sm">
        + Create Product +
    </a>
</div>

<table class="table-auto w-full text-sm text-left border-2 border-rose-200">
    <thead>
        <tr>
            <th class="px-4 py-2 border-2 border-rose-200">ID</th>
            <th class="px-4 py-2 border-2 border-rose-200">Product Name</th>
            <th class="px-4 py-2 border-2 border-rose-200">Brand</th>
            <th class="px-4 py-2 border-2 border-rose-200">Category</th>
            <th class="px-4 py-2 border-2 border-rose-200">Price</th>
            <th class="px-4 py-2 border-2 border-rose-200">Description</th>
            <th class="px-4 py-2 border-2 border-rose-200">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($product->getAllProducts() as $p): ?>
        <tr>
            <td class="px-4 py-2 border-2 border-rose-200"><?= $p['id'] ?></td>
            <td class="px-4 py-2 border-2 border-rose-200"><?= htmlspecialchars($p['name']) ?></td>
            <td class="px-4 py-2 border-2 border-rose-200"><?= htmlspecialchars($p['brand_name']) ?></td>
            <td class="px-4 py-2 border-2 border-rose-200"><?= htmlspecialchars($p['category_name']) ?></td>
            <td class="px-4 py-2 border-2 border-rose-200"><?= "Rp" . number_format($p['price'], 0, ',', '.') ?></td>
            <td class="px-4 py-2 border-2 border-rose-200"><?= htmlspecialchars($p['description']) ?></td>
            <td class="px-4 py-2 border-2 border-rose-200">
                <a href="?page=product_edit&id=<?= $p['id'] ?>" class="text-yellow-600 hover:underline text-sm">Edit</a>
                <a href="?page=product_delete&id=<?= $p['id'] ?>" class="text-red-600 hover:underline text-sm" onclick="return confirm('Are you sure you want to delete this brand?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
