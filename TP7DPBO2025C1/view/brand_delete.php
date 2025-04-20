<?php
$id = $_GET['id'];

// Proses penghapusan
$brand->deleteBrand($id);
header("Location: index.php?page=brands");
exit;
?>
