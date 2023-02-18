<?php
    namespace App\Controllers;
    use Jenssegers\Blade\Blade;

    class BaseController {
        protected function render($view,$data = []){
            $blade = new Blade('./app/views', 'storage');

            echo $blade->make($view,$data)->render();
        }
        protected function renderadmin($view,$data = []){
            
            $blades = new Blade('./admin/views', 'storage');

            echo $blades->make($view,$data)->render();

        }
    }
?>