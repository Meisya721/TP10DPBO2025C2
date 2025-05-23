<?php
require_once 'model/Brand.php';

class BrandViewModel {
    private $brand;

    public function __construct() {
        $this->brand = new Brand();
    }

    public function getBrandList() {
        return $this->brand->getAll();
    }

    public function getBrandById($id) {
        return $this->brand->getById($id);
    }

    public function addBrand($name, $country) {
        return $this->brand->create($name, $country);
    }

    public function updateBrand($id, $name, $country) {
        return $this->brand->update($id, $name, $country);
    }

    public function deleteBrand($id) {
        return $this->brand->delete($id);
    }
}
?>