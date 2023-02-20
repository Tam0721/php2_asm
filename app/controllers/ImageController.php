<?php
    namespace App\Controllers;
    use App\Models\Products;
    use App\Models\Images;
    use App\Controllers\BaseController;

    class ImageController extends BaseController {
        public function load_img_admin() {
            $id = $_GET['idsp'];
            $pro = Products::all();
            $listImages = Images::where('ma_hh', $id)->get();
            // $cates = Categories::all();
            $this -> renderAdmin('image.image', ['pro' => $pro, 'listImages' => $listImages]);
        }

        public function delete_img_admin() {
            $removeId = isset($_GET['id'])? $_GET['id']:"";

            $model = Images::find($removeId);
            Images::destroy($removeId);
            
            header('location: ./index.php?act=imglist&idsp='.$model->ma_hh);
        }
    }
?>