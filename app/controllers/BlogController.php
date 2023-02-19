<?php
    namespace App\Controllers;
    use App\Models\Blogs;
    use App\Controllers\BaseController;

    class Blog extends BaseController {
        public function loadall_blog() {
            $blogs = Blogs::all();
            include 'app/views/blog.php';
        }
        
        public function load_blogs_admin(){
            $blogs = Blogs::all();
            include './admin/views/tintuc.php';
        }
    }
?>