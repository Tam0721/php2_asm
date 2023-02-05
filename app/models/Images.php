<?php
    namespace App\Models;
    
    class Images extends BaseModels {
        var $table = "hinh_anh ha";

        public static function loadall_img($ma_hh) {
            $model = new static;
            $product = new Products();
            $sql = "SELECT ha.id, ha.img FROM " . $model -> table . " INNER JOIN " . $product -> table . " ON ha.ma_hh = hh.id WHERE hh.id = " . $ma_hh;
            $stmt = $model -> conn -> prepare($sql);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }
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