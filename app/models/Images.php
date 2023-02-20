<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    
    class Images extends Model {
        protected $table = "hinh_anh";
        public $timestamps = false;
        public $fillable = ['ma_hh', 'img'];
    }
?>