<?php
    namespace App\Controllers;
    use App\Models\Products;
    use App\Models\Images;

    class Product {
        public function load_detail_product() {
            if (isset($_GET['idsp'])&&($_GET['idsp']>0)){
                $id = $_GET['idsp'];
                $ma_hh = $_GET['idsp'];
                $detail_product = Products::loadone_product($id);
                $images = Images::loadall_img($ma_hh);
                include 'app/views/Detail.php';
            } else {
                include 'app/views/Home.php';
            }
            // $detail_product = Products::loadone_product($id);
            // include 'app/views/Detail.php';
        }
    }
?>