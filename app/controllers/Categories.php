<?php
    namespace App\Controllers;
    use App\Models\Categories;
    use App\Models\Products;

    class Category {
        public function loadfilter_product() {
            $categories = Categories::all();
            $mostView_products = Products::mostView();
            if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                $iddm = $_GET['iddm'];
                $products = Products::filter_sanpham($iddm);
            } else {
                $products = Products::all();
            }
            include 'app/views/Categories.php';
        }
    }
?>