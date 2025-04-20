<?php
require_once 'class/Product.php';
require_once 'class/Brand.php';
require_once 'class/Category.php';

$product = new Product();
$brand = new Brand();
$category = new Category();

if (isset($_POST['add_product'])) {
    // Menambahkan produk skincare baru
    $product->addProduct($_POST['name'], $_POST['brand_id'], $_POST['category_id'], $_POST['price'], $_POST['description']);
}
if (isset($_GET['delete_product'])) {
    // Menghapus produk berdasarkan ID
    $product->deleteProduct($_GET['delete_product']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skincare</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- <?php include 'view/header.php'; ?> -->
    
    <main class="max-w-7xl mx-auto p-8">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-6">Welcome to Skincare Inventory</h2>
        
        <nav class="text-center mb-8">
            <a href="?page=products" class="text-lg text-teal-600 hover:text-teal-800 mx-4">Products</a> |
            <a href="?page=brands" class="text-lg text-teal-600 hover:text-teal-800 mx-4">Brands</a> |
            <a href="?page=categories" class="text-lg text-teal-600 hover:text-teal-800 mx-4">Categories</a>
        </nav>

        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            // list atau index dari tiap tabel
            if ($page == 'products') {
                include 'view/product.php'; 
            } elseif ($page == 'brands') {
                include 'view/brand.php';  
            } elseif ($page == 'categories') {
                include 'view/category.php'; 
            } 
            // create
            elseif ($page == 'brand_create') {
                include 'view/brand_create.php';
            } elseif ($page == 'category_create') {
                include 'view/category_create.php';
            } elseif ($page == 'product_create') {
                include 'view/product_create.php';
            }
            // edit 
            elseif ($page == 'brand_edit') {
                include 'view/brand_edit.php';
            } elseif ($page == 'category_edit') {
                include 'view/category_edit.php';
            } elseif ($page == 'product_edit') {
                include 'view/product_edit.php';
            } 
            // delete
            elseif ($page == 'brand_delete') {
                include 'view/brand_delete.php';
            } elseif ($page == 'category_delete') {
                include 'view/category_delete.php';
            } elseif ($page == 'product_delete') {
                include 'view/product_delete.php';
            }
            
        } else {
            echo "<p class='text-center text-xl text-gray-600'>Select a section to manage skincare products.</p>";
        }
        ?>

    </main>
    
    <!-- <?php include 'view/footer.php'; ?> -->
</body>
</html>
