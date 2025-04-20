<?php
require_once 'config/db.php';

class Brand {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    public function getAllBrands() {
        $stmt = $this->db->query("SELECT * FROM brands");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createBrand($name, $country) {
        $stmt = $this->db->prepare("INSERT INTO brands (name, country) VALUES (?, ?)");
        return $stmt->execute([$name, $country]);
    }

    public function updateBrand($id, $name, $country) {
        $stmt = $this->db->prepare("UPDATE brands SET name = ?, country = ? WHERE id = ?");
        return $stmt->execute([$name, $country, $id]);
    }

    public function getBrandById($id) {
        $stmt = $this->db->prepare("SELECT * FROM brands WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }    

    public function deleteBrand($id) {
        $stmt = $this->db->prepare("DELETE FROM brands WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>