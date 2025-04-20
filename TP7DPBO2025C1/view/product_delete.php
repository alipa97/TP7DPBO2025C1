<?php
$id = $_GET['id'];

// Proses penghapusan
$product->deleteProduct($id);
header("Location: index.php?page=products");
exit;
?>
