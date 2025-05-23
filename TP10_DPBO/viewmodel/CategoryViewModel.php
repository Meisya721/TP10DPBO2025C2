<?php
require_once 'model/Category.php';

class CategoryViewModel {
    private $category;

    public function __construct() {
        $this->category = new Category();
    }

    public function getCategoryList() {
        return $this->category->getAll();
    }

    public function getCategoryById($id) {
        return $this->category->getById($id);
    }

    public function addCategory($name, $description) {
        return $this->category->create($name, $description);
    }

    public function updateCategory($id, $name, $description) {
        return $this->category->update($id, $name, $description);
    }

    public function deleteCategory($id) {
        return $this->category->delete($id);
    }
}
?>