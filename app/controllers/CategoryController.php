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

        public function loadcateadmin(){
            $cates = Categories::all();
            $this -> renderadmin('cate.danhmuc',['cates' => $cates]);

            //include"../admin/views/cate/danhmuc.blade.php";
        }

        public function add_cate_admin(){
            $cates = Categories::all();
            $this -> renderadmin('cate.add-cate',['cates' => $cates]);

        }

        public function saveaddCate(){
            $requestDB = $_POST;
            $model = new Categories();
    
            $model->fill($requestDB);
    
            $model->save();
            header('http://localhost/php2_asm/admin/index.php?act=lisdm');
    
        }    }
?>