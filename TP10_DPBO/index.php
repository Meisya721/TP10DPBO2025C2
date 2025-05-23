<?php
require_once 'viewmodel/ProductViewModel.php';
require_once 'viewmodel/CategoryViewModel.php';
require_once 'viewmodel/BrandViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'product';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'product') {
    $viewModel = new ProductViewModel();
    
    if ($action == 'list') {
        $productList = $viewModel->getProductList();
        require_once 'views/product_list.php';
        
    } 
    elseif ($action == 'add') {
        $categories = $viewModel->getCategories();
        $brands = $viewModel->getBrands();
        require_once 'views/product_form.php';
        
    }  elseif ($action == 'edit') {
        $product = $viewModel->getProductById($_GET['id']);
        $categories = $viewModel->getCategories();
        $brands = $viewModel->getBrands();
        require_once 'views/product_form.php';
        
    } elseif ($action == 'save') {
        $viewModel->addProduct(
            $_POST['name'], 
            $_POST['price'], 
            $_POST['stock'], 
            $_POST['category_id'], 
            $_POST['brand_id'] 
        );
        header('Location: index.php?entity=product');
        
    }  elseif ($action == 'update') {
        $viewModel->updateProduct(
            $_GET['id'], 
            $_POST['name'], 
            $_POST['price'], 
            $_POST['stock'], 
            $_POST['category_id'], 
            $_POST['brand_id']
        );
        header('Location: index.php?entity=product');
        
    } elseif ($action == 'delete') {
        $viewModel->deleteProduct($_GET['id']);
        header('Location: index.php?entity=product');
    }
}

elseif ($entity == 'category') {
    $viewModel = new CategoryViewModel();
    
    if ($action == 'list') {
        $categoryList = $viewModel->getCategoryList();
        require_once 'views/category_list.php';
        
    } elseif ($action == 'add') {
        require_once 'views/category_form.php';
        
    } elseif ($action == 'edit') {
        $category = $viewModel->getCategoryById($_GET['id']);
        require_once 'views/category_form.php';
        
    } elseif ($action == 'save') {
        $viewModel->addCategory($_POST['name'], $_POST['description']);
        header('Location: index.php?entity=category');
        
    }elseif ($action == 'update') {
        $viewModel->updateCategory($_GET['id'], $_POST['name'], $_POST['description']);
        header('Location: index.php?entity=category');
        
    } elseif ($action == 'delete') {
        $viewModel->deleteCategory($_GET['id']);
        header('Location: index.php?entity=category');
    }
}

elseif ($entity == 'brand') {
    $viewModel = new BrandViewModel();
    
    if ($action == 'list') {
        $brandList = $viewModel->getBrandList();
        require_once 'views/brand_list.php';
        
    } elseif ($action == 'add') {
        require_once 'views/brand_form.php';
        
    } elseif ($action == 'edit') {
        $brand = $viewModel->getBrandById($_GET['id']);
        require_once 'views/brand_form.php';
        
    } elseif ($action == 'save') {
        $viewModel->addBrand($_POST['name'], $_POST['country']);
        header('Location: index.php?entity=brand');
        
    }elseif ($action == 'update') {
       $viewModel->updateBrand($_GET['id'], $_POST['name'], $_POST['country']);
       header('Location: index.php?entity=brand');
        
    } elseif ($action == 'delete') {
        $viewModel->deleteBrand($_GET['id']);
        header('Location: index.php?entity=brand');
    }
}
?>