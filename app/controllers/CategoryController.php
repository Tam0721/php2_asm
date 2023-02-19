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
    }
?>