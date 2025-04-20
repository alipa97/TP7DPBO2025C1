<?php
require_once 'config/db.php';

class Category {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function getAllCategories() {
        $stmt = $this->db->query("SELECT * FROM categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createCategory($name) {
        $stmt = $this->db->prepare("INSERT INTO categories (name) VALUES (?)");
        return $stmt->execute([$name]);
    }

    public function updateCategory($id, $name) {
        $stmt = $this->db->prepare("UPDATE categories SET name = ? WHERE id = ?");
        return $stmt->execute([$name, $id]);
    }

    public function getCategoryById($id) {
        $stmt = $this->db->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }  

    public function deleteCategory($id) {
        $stmt = $this->db->prepare("DELETE FROM categories WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>