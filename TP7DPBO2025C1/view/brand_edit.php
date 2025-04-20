<?php
$id = $_GET['id'];
$brandData = $brand->getBrandById($id);

if (!$brandData) {
    echo "<p class='text-red-600 text-center mt-4'>Data brand tidak ditemukan.</p>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brand->updateBrand($id, $_POST['name'], $_POST['country']);
    header("Location: index.php?page=brands");
    exit;
}
?>

<h3 class="w-full py-4 text-center text-xl text-sky-900">Edit Brand</h3>

<form method="POST" class="max-w-md mx-auto space-y-4">
    <div>
        <label class="block text-sm font-medium text-gray-700">Brand Name</label>
        <input type="text" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2" value="<?= htmlspecialchars($brandData['name']) ?>">
    </div>
    <div>
        <label class="block text-sm font-medium text-gray-700">Country</label>
        <input type="text" name="country" required class="w-full border border-gray-300 rounded-lg px-4 py-2" value="<?= htmlspecialchars($brandData['country']) ?>">
    </div>
    <div class="text-right">
        <button type="submit" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg text-sm">Update</button>
    </div>
</form>