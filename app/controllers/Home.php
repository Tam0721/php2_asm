<?php
    namespace App\Controllers;
    use App\Models\Products;

    class Home {
        public function index() {
            $products = Products::all();
            $special_product = Products::special();
            $mostView_products = Products::mostView();
            include 'app/views/Home.php';
        }
    }
?>