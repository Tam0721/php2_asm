<?php
    namespace App\Controllers;
    use App\Models\Blogs;
    use App\Controllers\BaseController;

    class BlogController extends BaseController {
        public function loadall_blog() {
            $blogs = Blogs::all();
            $this -> render('blog.blog', compact('blogs'));
        }
        
        public function load_blogs_admin(){
            $blogs = Blogs::all();
            include './admin/views/tintuc.php';
        }
    }
?>