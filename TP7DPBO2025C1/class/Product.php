<?php
require_once 'config/db.php';

class Product {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function getAllProducts() {
        $stmt = $this->db->query("
            SELECT p.id, p.name, p.price, p.description, b.name AS brand_name, c.name AS category_name 
            FROM products p
            JOIN brands b ON p.brand_id = b.id
            JOIN categories c ON p.category_id = c.id
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct($name, $brand_id, $category_id, $price, $description) {
        $stmt = $this->db->prepare("INSERT INTO products (name, brand_id, category_id, price, description) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$name, $brand_id, $category_id, $price, $description]);
    }

    public function updateProduct($id, $name, $brand_id, $category_id, $price, $description) {
        $stmt = $this->db->prepare("UPDATE products SET name = ?, brand_id = ?, category_id = ?, price = ?, description = ? WHERE id = ?");
        return $stmt->execute([$name, $brand_id, $category_id, $price, $description, $id]);
    }

    public function deleteProduct($id) {
        $stmt = $this->db->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
