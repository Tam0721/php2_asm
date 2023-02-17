<?php
    namespace App\Controllers;
    use App\Models\Products;
    use App\Models\Images;
    use App\Controllers\BaseController;

    class ProductController extends BaseController {
        public function load_detail_product() {
            $id = $_GET['idsp'];
            // $demo = Products::updateview($id);
            $detail_product = Products::where('id', $id)->join('loai', 'hang_hoa.iddm', '=', 'loai.ma_loai')->first();
            $listImages = Images::where('ma_hh', $id)->get();
            // include 'app/views/Detail.php';
            $this -> render('product.detail', compact('detail_product', 'listImages'));
        }
    }
?>