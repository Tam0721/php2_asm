<?php 
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    
    class Categories extends Model {
        protected $table = "loai";
        public $fillable = ['ten_loai'];
        public $timestamps = false;
    }

?>