<?php
$id = $_GET['id'];

// Proses penghapusan
$category->deleteCategory($id);
header("Location: index.php?page=categories");
exit;
?>