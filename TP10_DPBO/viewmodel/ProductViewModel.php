<?php
require_once 'model/Product.php';
require_once 'model/Category.php';
require_once 'model/Brand.php';

class ProductViewModel {
    private $product;
    private $category;
    private $brand;

    public function __construct() {
        $this->product = new Product();
        $this->category = new Category();
        $this->brand = new Brand();
    }

    public function getProductList() {
        return $this->product->getAll();
    }

    public function getProductById($id) {
        return $this->product->getById($id);
    }

    public function getCategories() {
        return $this->category->getAll();
    }

    public function getBrands() {
        return $this->brand->getAll();
    }

    public function addProduct($name, $price, $stock, $category_id, $brand_id) {
        return $this->product->create($name, $price, $stock, $category_id, $brand_id);
    }

    public function updateProduct($id, $name, $price, $stock, $category_id, $brand_id) {
        return $this->product->update($id, $name, $price, $stock, $category_id, $brand_id);
    }

    public function deleteProduct($id) {
        return $this->product->delete($id);
    }
}
?>