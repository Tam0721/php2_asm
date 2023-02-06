<?php
    namespace App\Controllers;
    use App\Models\Products;
    use App\Models\Images;

    class Product {
        public function load_detail_product() {
            $id = $_GET['idsp'];
            $ma_hh = $_GET['idsp'];
            $demo = Products::updateview($id);
            $detail_product = Products::loadone_product($id);
            $images = Images::loadall_img($ma_hh);
            include 'app/views/Detail.php';
        }
    }
?>