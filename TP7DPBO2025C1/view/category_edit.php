<?php
// Mengambil ID dari URL
$id = $_GET['id'];

// Mendapatkan data kategori berdasarkan ID
$categoryData = $category->getCategoryById($id);

if (!$categoryData) {
    echo "<p class='text-red-600 text-center mt-4'>Data kategori tidak ditemukan.</p>";
    exit;
}

// Proses update kategori jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category->updateCategory($id, $_POST['name']);
    header("Location: index.php?page=categories");
    exit;
}
?>

<h3 class="w-full py-4 text-center text-xl text-sky-900">Edit Category</h3>

<form method="POST" class="max-w-md mx-auto space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Category Name</label>
        <input type="text" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2" value="<?= htmlspecialchars($categoryData['name']) ?>">
    </div>
    <div class="text-right">
        <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm">Update</button>
    </div>
</form>