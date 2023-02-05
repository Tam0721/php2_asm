<?php
    namespace App\Controllers;
    use App\Models\Blogs;

    class Blog {
        public function loadall_blog() {
            $blogs = Blogs::all();
            include 'app/views/Blog.php';
        }
    }
?>