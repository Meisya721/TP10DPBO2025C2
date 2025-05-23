<?php
require_once 'config/Database.php';

class Product {
    private $conn;
    private $table = 'product';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT p.*, c.name as category_name, b.name as brand_name 
                 FROM " . $this->table . " p 
                 JOIN category c ON p.category_id = c.id 
                 JOIN brand b ON p.brand_id = b.id 
                 ORDER BY p.name";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT p.*, c.name as category_name, b.name as brand_name 
                 FROM " . $this->table . " p 
                 JOIN category c ON p.category_id = c.id 
                 JOIN brand b ON p.brand_id = b.id 
                 WHERE p.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($name, $price, $stock, $category_id, $brand_id) {
        $query = "INSERT INTO " . $this->table . " (name, price, stock, category_id, brand_id) 
                 VALUES (:name, :price, :stock, :category_id, :brand_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':brand_id', $brand_id);
        return $stmt->execute();
    }

    public function update($id, $name, $price, $stock, $category_id, $brand_id) {
        $query = "UPDATE " . $this->table . " 
                 SET name = :name, price = :price, stock = :stock, 
                     category_id = :category_id, brand_id = :brand_id 
                 WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':stock', $stock);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':brand_id', $brand_id);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>