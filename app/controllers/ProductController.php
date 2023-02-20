<?php
    namespace App\Controllers;
    use App\Models\Products;
    use App\Models\Categories;
    use App\Models\Images;
    use App\Controllers\BaseController;

    class ProductController extends BaseController {
        public function load_detail_product() {
            $id = $_GET['idsp'];
            $updateView = Products::where('id', $id)->first();
            $updateView -> luotxem += 1;
            $updateView -> save();
            $detail_product = Products::where('hang_hoa.id', $id)->join('loai', 'hang_hoa.iddm', '=', 'loai.id')->first();
            $listImages = Images::where('ma_hh', $id)->get();
            $this -> render('product.detail', compact('detail_product', 'listImages'));
        }

        public function load_pro_admin() {
            $pro = Products::all();
            $cates = Categories::all();
            $this -> renderAdmin('product.product', ['pro' => $pro, 'cates' => $cates]);
        }

        public function add_pro_admin(){
            $cates = Categories::all();
            $this -> renderAdmin('product.add-pro',['cates' => $cates]);
        }

        public function editproform(){
            $removeId = isset($_GET['id']) ? $_GET['id']:null;

            $model = Products::find($removeId);
            $cates = Categories::all();

            $this -> renderAdmin('product.edit', ['model' => $model, 'cates' => $cates]);
        }

        public function editprosave(){
            $id = $_GET['id'];
            $id = isset($_GET['id']) ? $_GET['id']: null;
            
            $model = Products::find($id);
            $requestDB = $_POST;    
            $model->fill($requestDB);

            $imgFile = $_FILES['img'];
            // $filename = $model->img;
            if($imgFile['size'] > 0){
                $filename = $imgFile['name'];
                move_uploaded_file($imgFile['tmp_name'], '../public/upload/' . $filename);
                // $filename = 'public/upload/' . $filename;
            }
            $model->img = $filename;
    
            $model->save();
            header('location: ./index.php?act=listsp');
        }

        public function saveaddPro(){
            $requestDB = $_POST;
            $imgFile = $_FILES['img'];

            $model = new Products();

            $model->fill($requestDB);

            $filename = "";
            // nếu có ảnh up lên thì lưu ảnh
            if($imgFile['size'] > 0){
                $filename = $imgFile['name'];
                move_uploaded_file($imgFile['tmp_name'], '../public/upload/' . $filename);
                // $filename = 'public/upload/' . $filename;
            }
            $model->img = $filename;
    
            $model->save();
            header('location: ./index.php?act=listsp');
        }  

        public function remove_pro_admin(){
            $removeId = isset($_GET['id'])? $_GET['id']:"";

            $model = Products::find($removeId);
            Products::destroy($removeId);
            
            header('location: ./index.php?act=listsp');
        }
    }
?>