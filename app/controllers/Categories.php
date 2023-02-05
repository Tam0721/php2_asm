<?php
    namespace App\Controllers;
    use App\Models\Categories;
    use App\Models\Products;

    class Category {
        public function loadall_product() {
            $categories = Categories::all();
            $products = Products::all();
            $mostView_products = Products::mostView();
            include 'app/views/Categories.php';
        }

        // public function loadfilter_product() {
        //     $categories = Categories::all();
        //     $products = Products::all();
        //     $mostView_products = Products::mostView();
        //     include 'app/views/Categories.php';
        // }
    }
?>