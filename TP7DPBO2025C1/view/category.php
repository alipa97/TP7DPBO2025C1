<h3 class="w-full py-4 text-center text-xl text-sky-900">Category</h3>

<div class="mb-4 text-center">
    <a href="?page=category_create" class="bg-cyan-700 hover:bg-cyan-800 text-white px-4 py-2 rounded-lg text-sm">
        + Create Category +
    </a>
</div>

<table class="table-auto w-full text-sm text-left border-2 border-rose-200">
    <thead>
        <tr>
            <th class="px-4 py-2 border-2 border-rose-200">ID</th>
            <th class="px-4 py-2 border-2 border-rose-200">Category Name</th>
            <th class="px-4 py-2 border-2 border-rose-200">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($category->getAllCategories() as $c): ?>
        <tr>
            <td class="px-4 py-2 border-2 border-rose-200"><?= $c['id'] ?></td>
            <td class="px-4 py-2 border-2 border-rose-200"><?= htmlspecialchars($c['name']) ?></td>
            <td class="px-4 py-2 border-2 border-rose-200 space-x-2">
                <a href="?page=category_edit&id=<?= $c['id'] ?>" class="text-yellow-600 hover:underline text-sm">Edit</a>
                <a href="?page=category_delete&id=<?= $c['id'] ?>" class="text-red-600 hover:underline text-sm" onclick="return confirm('Are you sure you want to delete this category?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
