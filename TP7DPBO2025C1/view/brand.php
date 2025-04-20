<h3 class="w-full py-4 text-center text-xl text-sky-900">Brand</h3>

<div class="mb-4 text-center">
    <a href="?page=brand_create" class="bg-cyan-700 hover:bg-cyan-800 text-white px-4 py-2 rounded-lg text-sm">
        + Create Brand +
    </a>
</div>

<table class="table-auto w-full text-sm text-left border-2 border-rose-200">
    <thead>
        <tr>
            <th class="px-4 py-2 border-2 border-rose-200">ID</th>
            <th class="px-4 py-2 border-2 border-rose-200">Brand Name</th>
            <th class="px-4 py-2 border-2 border-rose-200">Country</th>
            <th class="px-4 py-2 border-2 border-rose-200">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($brand->getAllBrands() as $b): ?>
        <tr>
            <td class="px-4 py-2 border-2 border-rose-200"><?= $b['id'] ?></td>
            <td class="px-4 py-2 border-2 border-rose-200"><?= htmlspecialchars($b['name']) ?></td>
            <td class="px-4 py-2 border-2 border-rose-200"><?= htmlspecialchars($b['country']) ?></td>
            <td class="px-4 py-2 border-2 border-rose-200 space-x-2">
                <a href="?page=brand_edit&id=<?= $b['id'] ?>" class="text-yellow-600 hover:underline text-sm">Edit</a>
                <a href="?page=brand_delete&id=<?= $b['id'] ?>" class="text-red-600 hover:underline text-sm" onclick="return confirm('Are you sure you want to delete this brand?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>