<?php
    namespace App\Controllers;
    use App\Models\Products;
    use App\Models\Images;
    use App\Controllers\BaseController;

    class ImageController extends BaseController {
        // public function load_detail_product() {
        //     $id = $_GET['idsp'];
        //     $ma_hh = $_GET['idsp'];
        //     // $demo = Products::updateview($id);
        //     $detail_product = Products::where('id', $id)->join('loai', 'hang_hoa.iddm', '=', 'loai.ma_loai')->first();
        //     $images = Images::loadall_img($ma_hh);
        //     // include 'app/views/Detail.php';
        //     $this -> render('product.detail', compact('detail_product'));
        // }
    }
?>