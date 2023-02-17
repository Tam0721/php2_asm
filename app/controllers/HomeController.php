<?php
    namespace App\Controllers;
    use App\Models\Products;
    use App\Controllers\BaseController;

    class HomeController extends BaseController {
        public function index() {
            $products = Products::all();
            // $special_product = Products::special();
            // $mostView_products = Products::mostView();
            // include 'app/views/Home.php';
            $this -> render('home.home', ['listItem' => $products]);
        }
    }
?>