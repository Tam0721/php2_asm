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
            $this -> renderAdmin('image.image', ['pro' => $pro, 'listImages' => $listImages]);
        }

        public function delete_img_admin() {
            $removeId = isset($_GET['id'])? $_GET['id']:"";

            $model = Images::find($removeId);
            Images::destroy($removeId);
            
            header('location: ./index.php?act=imglist&idsp='.$model->ma_hh);
        }

        public function add_img_admin(){
            $pro = Products::all();
            $this -> renderAdmin('image.add-img', ['pro' => $pro]);
        }

        public function saveaddImg(){
            $requestDB = $_POST;
            $imgFile = $_FILES['img'];
            $totalfiles = count($_FILES['img']['name']);
            for($i = 0; $i < $totalfiles; $i++){
                $model = new Images();

                $model->fill($requestDB);
                if($imgFile['size'] > 0) {
                    $img = $_FILES['img']['name'][$i];
                    move_uploaded_file($_FILES["img"]["tmp_name"][$i], '../public/upload/' . $img);
                    // $filename = 'public/upload/' . $filename;
                }
                $model->img = $img;
                $model->save();
            }
            header('location: ./index.php?act=imglist&idsp='.$model->ma_hh);
        }
    }
?>