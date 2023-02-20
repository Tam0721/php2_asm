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
            $detail_product = Products::where('id', $id)->join('loai', 'hang_hoa.iddm', '=', 'loai.ma_loai')->first();
            $listImages = Images::where('ma_hh', $id)->get();
            $this -> render('product.detail', compact('detail_product', 'listImages'));
        }

        // public function load_pro_admin(){
        //     $pro = Products::all();
        //     include"../admin/views/sanpham.php";       
        // }
        public function load_pro_admin() {
            $pro = Products::all();
            $this -> renderAdmin('product.product', ['product' => $pro]);
        }

        public function add_pro_admin(){
            $cates = Categories::all();
            $this -> renderAdmin('product.add-pro',['cates'=>$cates]);
        }

        public function saveaddPro(){
            $requestDB = $_POST;
            $model = new Products();
            $imgFile = $_FILES['img'];

    
            $model->fill($requestDB);
            $filename = "";
            // nếu có ảnh up lên thì lưu ảnh
            if($imgFile['size'] > 0){
                $filename = uniqid() . '-' . $imgFile['name'];
                move_uploaded_file($imgFile['tmp_name'], './uploads/'. $filename);
                $filename = './uploads/' . $filename;
            }
            $model->image = $filename;
    
            $model->save();
            header('location: ./index.php?act=listsp');
        }  
    }
?>