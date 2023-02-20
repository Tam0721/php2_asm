<?php
    namespace App\Controllers;
    use App\Models\Categories;
    use App\Models\Products;
    use App\Controllers\BaseController;
    use App\Controllers\ProductController;

    class CategoryController extends BaseController {
        public function loadfilter_product() {
            $cates = Categories::all();
            $prod = Products::all();
            if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                $iddm = $_GET['iddm'];
                $products = Products::where('iddm', $iddm) -> get();
            } else {
                $products = Products::all();
            }
            $this -> render('category.category', ['listItem' => $cates, 'listProduct' => $products, 'listProd' => $prod]);
        }

        public function loadcateadmin() {
            $cates = Categories::all();
            // $msg = isset($_GET['msg']) ? $_GET['msg'] : null; , 'errmsg'=>$msg 
            $this -> renderAdmin('category.category', ['cates' => $cates]);
        }

        public function add_cate_admin(){
            // $cates = Categories::all();
            $this -> renderadmin('category.add-cate');
        }

        public function saveaddCate(){
            $requestDB = $_POST;
            $model = new Categories();
    
            $model->fill($requestDB);
    
            $model->save();
            header('location: ./index.php?act=listdm');
        }  
        
        public function editcatesave(){
            $id=$_GET['ma_loai'];
            $id = isset($_GET['ma_loai']) ? $_GET['ma_loai']: null;
            if(!$id){
                header('location: ./index.php?act=listdm');
                die;
            }
            $model = Categories::find($id);
            if(!$model){
                header('location: ./index.php?act=listdm');
                die;   
            }

            $requestDB = $_POST;    
            $model->fill($requestDB);
    
            $model->save();
            header('location: ./index.php?act=listdm');
        }

        public function editcateform(){
            $removeId = isset($_GET['ma_loai']) ? $_GET['ma_loai']:null;
            if(!$removeId){
                header('location: ./index.php?act=listdm');
                die;
            }
            $model = Categories::find($removeId);
            if(!$model){
                header('location: ./index.php?act=listdm');
                die;
            }
            $cates = Categories::all();
            $this->renderAdmin('category.edit',['cates'=>$cates,'model'=>$model]);
        }
        
        public function remove_cate_admin(){
            // $cates = Categories::all();
            // if(isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)){
            //     $id = $_GET['ma_loai'];
            //     $cates = Categories::where('ma_loai', $id) -> delete($id);
            //     $this->renderAdmin('category.category',['cates'=>$cates]);
            // }

             $removeId = isset($_GET['ma_loai'])? $_GET['ma_loai']:"";
            // // Categories::destroy($removeId);

            // if($removeId!="") $this->cates::where("ma_loai",$removeId)->delete();
            //     header('location: ../admin/index.php?act=listdm');

            if(!$removeId){
                header('location: ./index.php?act=listdm/$msg=khongthexoa');
                die;
            }
            $model = Categories::find($removeId);
            
            if(!$model){
                $msg ="id không tồn tại";
            }else{
                Categories::destroy($removeId);
                $msg="Xóa danh mục thành công";
            }
            header('location: ./index.php?act=listdm/?$msg=$msg');
            die;
         }
    }
?>