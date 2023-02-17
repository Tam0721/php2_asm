<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;
    
    class Images extends Model {
        protected $table = "hinh_anh";
        public $timestamps = false;
    }

    // function insert_img($ma_hh, $img) {
    //     $sql = "INSERT INTO hinh_anh (ma_hh, img)
    //     VALUES ('$ma_hh', '$img')";
    //     pdo_execute($sql);
    // }

    // function delete_img($id){
    //     $sql = "DELETE FROM hinh_anh WHERE id=".$id;
    //     pdo_execute($sql);
    // }
?>